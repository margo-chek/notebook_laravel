<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="app.scss">
        <title>Notebook main</title>
        <script src="app.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="header">
                <div>SUPER NOTEBOOK</div>
                <div class="link">Welcome,
                    <a class="linkName" href='register'>
                        {{ $username }}
                    </a> .
                    <a class="linkName" href='login'>
                        Logout
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="leftContainer">
                    <div class="searchBlock">
                        <input class="inputSearchBlock" type="text" onkeyup="searchNote()" placeholder="Search">
                        <div class="searchIcon"></div>
                    </div>
                    <div class="listOfNotesBlock">
                        @foreach (Note::resultsNoteOfListSelect($username) as $item)
                            <div class="noteItemBlock visible">
                                <div class="noteItemName searchName">{{ $item[note_name] }}</div>
                                <div class="noteItemDate">{{ date("d.m.Y", strtotime(view($item[use_date]))}}</div>
                                <div class="noteItemActions">
                                    <button class="editIcon" onclick="showNote(event, {{ $item[id_note]}})"></button>
                                    <button class="deleteIcon" onclick="deleteNote(event, {{ $item[id_note]}})"></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="buttonBlock">
                        <button type="button" class="buttonAddNote" name="buttonAddNote" onclick="addNewNote()">
                            Add new note
                        </button>
                    </div>
                </div>
                <div class="betweenContainer"></div>
                @yield('rightContainer')
            </div>
            <div class="output">{{ $error }}</div>
            <div class="header footer">Copyright by ..., 2019</div>
        </div>
    </body>
</html>
