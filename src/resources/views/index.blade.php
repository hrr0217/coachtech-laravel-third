@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance_alert">
    // メッセージ機能
</div>

<div class="attendance_content">
    <div class="attendance_panel">
        <form class="attendance_button">
            <button class="attendance_button-submit" type="submit">勤務開始</button>
        </form>
        <form class="attendance_button">
            <button class="attendance_button-submit" type="submit">勤務終了<button>
        </form>
    </div>
    <div class="attendance-table">
        <table class="attendance-table_inner">
            <tr class="attendance-table_row">
                <th class="attendance-table_item">名前</th>
                <th class="attendance-table_item">開始時間</th>
                <th class="attendance-table_item">終了時間</th>
            </tr>
            <tr class="attendance-table_row">
                <td class="attendance-table_item">サンプル太郎</td>
                <td class="attendance-table_item">サンプル</td>
                <td class="attendance-table_item">サンプル</td>
            </table>
        </table>
    </div>
</div>
@endsection