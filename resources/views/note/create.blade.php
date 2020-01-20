@extends('note.main')

@section('rightContainer')
<div class="rightContainerCreate">
    <div class="noteHeaderBlockCreate">
        <span class="noteEditBlock">Create mode</span>
    </div>
    <form id=form action="{{url ('note/create/new')}}" class="formBlock" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="username" value="{{Auth::user()->username}}" />
        <input placeholder="Note 3" class="noteNameBlockEdit inputForm" name="note_name" type="text" required>
        <input placeholder="02.10.2019" class="noteDateBlockEdit inputForm" name="use_date" type="date" required>
        <textarea placeholder="Line 1" class="infoBlockEdit inputForm" name="content" required></textarea>
        <div class="buttonBlock">
            <button class="buttonSave" type="submit" name="buttonSave">Save</button>
        </div>
    </form>
</div>
@endsection