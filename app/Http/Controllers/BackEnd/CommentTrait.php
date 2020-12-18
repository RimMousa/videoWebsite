<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Comments\Store;
use App\Models\Comments;

trait CommentTrait
{
    public function commentStore(Store $request)
    {
        $requestArray = $request->all() + ['user_id' => auth()->user()->id];
        Comments::create($requestArray);
        return redirect()->route('videos.edit', $requestArray['video_id']);
    }

    public function commentDelete($id)
    {
        $row=Comments::findOrFail($id);
        $row->delete();
        return redirect()->route('videos.edit', $row->video_id);
    }
}
