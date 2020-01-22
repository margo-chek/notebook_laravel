@extends('layouts.app')

@section('content')
<div class="content">
    <div class="leftContainer">
        <div class="searchBlock">
            <input class="inputSearchBlock" type="text" onkeyup="searchNote()" placeholder="Search">
            <div class="searchIcon"></div>
        </div>
        <div class="listOfNotesBlock">
            @foreach ($notes as $item)
                @if ($item["username"] == Auth::user()->username)
                    <div class="noteItemBlock visible">
                        <a class="noteItemBlockInfo" href="/note/show/{{ $item["id"] }}">
                            <div class="noteItemName searchName">{{ $item["note_name"] }}</div>
                            <div class="noteItemDate">{{ date("d.m.Y", strtotime($item["use_date"])) }}</div>
                        </a>
                        <div class="noteItemActions">
                            <a class="editIcon" href="/note/edit/{{ $item["id"] }}"></a>
                            <a class="deleteIcon" href="/note/delete/{{ $item["id"] }}"></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a class="buttonBlock" href="{{url ('note/create')}}">
            <button type="button" class="buttonAddNote" name="buttonAddNote">
                Add new note
            </button>
        </a>
    </div>
    <div class="betweenContainer"></div>

    @yield('rightContainer')
</div>
@endsection