<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Location;
use App\Models\Menu;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class LocationController extends AppBaseController
{
    /** @var LocationRepository $locationRepository */
    private $locationRepository;

    public function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    /**
     * Display a listing of the Location.
     */
    public function index(Request $request)
    {
        $locations = Location::paginate(10);
        $allMenu = Menu::getDataForSelect();

        return view('locations.index', compact('allMenu'))
            ->with('locations', $locations);
    }

    /**
     * Show the form for creating a new Location.
     */
    public function create()
    {
        $allMenu = Menu::getDataForSelect();
        return view('locations.create', compact('allMenu'));
    }

    /**
     * Store a newly created Location in storage.
     */
    public function store(CreateLocationRequest $request)
    {
        $input = $request->all();

        $location = $this->locationRepository->create($input);

        Flash::success('Location saved successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Display the specified Location.
     */
    public function show($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('locations.index'));
        }

        return view('locations.show')->with('location', $location);
    }

    /**
     * Show the form for editing the specified Location.
     */
    public function edit($id)
    {
        $location = $this->locationRepository->find($id);
        $allMenu = Menu::getDataForSelect();

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('locations.index'));
        }

        return view('locations.edit', compact('allMenu'))->with('location', $location);
    }

    /**
     * Update the specified Location in storage.
     */
    public function update($id, UpdateLocationRequest $request) //$id, UpdateLocationRequest $request
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('locations.index'));
        }

        $location = $this->locationRepository->update($request->all(), $id);

        if ($request->hasFile('img')) {
            if ($location->img) {
                Storage::delete($location->img);
            }

            $filePath = $request->file('img');//->store('images', 'public');
            $imagePath = 'images/' . uniqid() . '.' . $filePath->getClientOriginalExtension();

            Image::read($filePath)
                ->resize(750, 350)
                ->save(storage_path('app/public/' . $imagePath));

            $location->img = $imagePath;
            $location->save();
        }

        Flash::success('Location updated successfully.');

        return redirect(route('locations.index'));
    }

    /**
     * Remove the specified Location from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error('Location not found');

            return redirect(route('locations.index'));
        }

        $this->locationRepository->delete($id);

        Flash::success('Location deleted successfully.');

        return redirect(route('locations.index'));
    }
}
