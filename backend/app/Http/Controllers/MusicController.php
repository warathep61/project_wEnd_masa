<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musics = Music::all(); // ดึงข้อมูลเพลงทั้งหมด
        return response()->json($musics); // ส่งข้อมูลเป็น JSON
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $music = Music::find($id); // ค้นหาเพลงตาม ID
        if (!$music) {
            return response()->json(['message' => 'Music not found'], 404); // ถ้าไม่พบเพลง
        }
        return response()->json($music); // ส่งข้อมูลเพลงเป็น JSON
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $music = Music::find($id); // ค้นหาเพลงตาม ID
        if (!$music) {
            return response()->json(['message' => 'Music not found'], 404); // ถ้าไม่พบเพลง
        }

        // อัปเดตข้อมูลเพลง
        $music->update($request->only([
            'title',
            'artist',
            'album',
            'genre',
            'release_year',
            'track_number',
            'label',
            'duration',
            'composer',
            'producer',
            'explicit_content',
            'language',
            'cover_image',
            'file_path',
            'plays',
        ]));

        return response()->json($music); // ส่งข้อมูลเพลงที่อัปเดตเป็น JSON
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $music = Music::find($id); // ค้นหาเพลงตาม ID
        if (!$music) {
            return response()->json(['message' => 'Music not found'], 404); // ถ้าไม่พบเพลง
        }

        $music->delete(); // ลบเพลง
        return response()->json(['message' => 'Music deleted successfully']); // ส่งข้อความยืนยันการลบ
    }
}
