@extends('note.main')

@section('rightContainer')
<div class="rightContainerInfo">
    <div class="noteHeaderBlockInfo">
        <div class="noteNameBlockInfo">{{ $note->note_name }}</div>
        <div class="noteDateBlockInfo">{{ $note->use_date }}</div>
    </div>
    <div class="infoBlockInfo">{{ $note->content }}</div>
</div>
@endsection