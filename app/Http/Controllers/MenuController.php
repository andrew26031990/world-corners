<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Menu;
use App\Repositories\MenuRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Flash;

class MenuController extends AppBaseController
{
    /** @var MenuRepository $menuRepository*/
    private $menuRepository;

    public function __construct(MenuRepository $menuRepo)
    {
        $this->menuRepository = $menuRepo;
    }

    /**
     * Display a listing of the Menu.
     */
    public function index(Request $request)
    {
        $menus = $this->menuRepository->paginate(10);
        $allMenu = Menu::getDataForSelect(true);

        return view('menus.index',
            compact('allMenu', 'menus'));
    }

    /**
     * Show the form for creating a new Menu.
     */
    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $allMenu = Menu::getDataForSelect();
        return view('menus.create', compact('allMenu'));
    }

    /**
     * Store a newly created Menu in storage.
     */
    public function store(CreateMenuRequest $request)
    {
        $input = $request->all();

        $this->menuRepository->create($input);

        Flash::success('Категория успешно добавлена.');

        return redirect(route('menus.index'));
    }

    /**
     * Display the specified Menu.
     */
    public function show($id)
    {
        $menu = $this->menuRepository->find($id);

        if (empty($menu)) {
            Flash::error('Категория не найдена');

            return redirect(route('menus.index'));
        }

        return view('menus.show')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified Menu.
     */
    public function edit($id)
    {
        $menu = $this->menuRepository->find($id);
        $allMenu = Menu::getDataForSelect();

        if (empty($menu)) {
            Flash::error('Категория не найдена');

            return redirect(route('menus.index'));
        }

        return view('menus.edit', compact('menu', 'allMenu'));
    }

    /**
     * Update the specified Menu in storage.
     */
    public function update($id, UpdateMenuRequest $request)
    {
        $menu = $this->menuRepository->find($id);

        if (empty($menu)) {
            Flash::error('Категория не найдена');

            return redirect(route('menus.index'));
        }

        $this->menuRepository->update($request->all(), $id);

        Flash::success('Menu updated successfully.');

        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified Menu from storage.
     *
     * @throws \Exception
     */
    public function destroy($id): Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $menu = $this->menuRepository->find($id);

        if (empty($menu)) {
            Flash::error('Категория не найдена');

            return redirect(route('menus.index'));
        }

        $this->menuRepository->delete($id);

        Flash::success('Категория успешно удалена.');

        return redirect(route('menus.index'));
    }
}
