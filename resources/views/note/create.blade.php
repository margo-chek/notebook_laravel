@extends('note.main')

@section('rightContainer')

<div class="rightContainerCreate">
    <div class="noteHeaderBlockCreate">
        <span class="noteEditBlock">Create mode</span>
    </div>
    <form id=form action="{{url ('note')}}" class="formBlock" method="post">
        {{csrf_field()}}
        <input placeholder="Note 3" class="noteNameBlockEdit inputForm" name="inputNoteName" type="text" required>
        <input placeholder="02.10.2019" class="noteDateBlockEdit inputForm" name="inputNoteDate" type="date" required>
        <textarea placeholder="Line 1" class="infoBlockEdit inputForm" name="inputNoteContent" required></textarea>
        <div class="buttonBlock">
            <input class="buttonSave" type="submit" name="buttonSave" onclick="send(event)" value="Save"/>
        </div>
    </form>
</div>
@endsection