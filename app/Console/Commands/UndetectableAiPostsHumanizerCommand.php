<?php

namespace App\Console\Commands;

use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UndetectableAiPostsHumanizerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:humanized';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$token = config('app.undetectable_ai');
        dd('here');
        Location::chunk(10, function ($posts) use($token) {
            foreach ($posts as $post) {
                $statusResponse = $this->processDocument($post->text, $token);
                $post->text = $statusResponse['output'];
                $post->save();
            }
        });
    }

    static function processDocument($documentText, $token)
    {
        try {
            $submitResponse = self::submitDocument($token, $documentText);
            $documentId = $submitResponse['id'];

            sleep(30);

            $statusResponse = self::checkDocumentStatus($token, $documentId);

            while ($statusResponse['status'] == 'queued') {
                sleep(30);
                $statusResponse = self::checkDocumentStatus($token, $documentId);
            }

            return $statusResponse;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    /**
     * @throws \Exception
     */
    static function checkDocumentStatus($token, $documentId)
    {
        $response = Http::contentType('application/json')->withToken($token)->post('https://api.undetectable.ai/document', [
            'id' => $documentId
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Unable to check document status');
    }

    /**
     * @throws \Exception
     */
    static function submitDocument($token, $documentText)
    {
        $response = Http::withToken($token)->post('https://api.undetectable.ai/submit', [
            'content' => $documentText,
            'readability' => 'Journalist',
            'purpose' => 'Article',
            'strength' => 'Quality'
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Unable to submit document');
    }
}
