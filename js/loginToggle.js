function toRegister() {
  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "none";
  login[1].style.display = "none";

  var signup = document.getElementsByClassName('signup');
  signup[0].style.display = "block";
  signup[1].style.display = "block";
}

function toLogin() {
  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "block";
  login[1].style.display = "block";

  var signup = document.getElementsByClassName('signup');
  signup[0].style.display = "none";
  signup[1].style.display = "none";
}

function addNote() {
  var note = document.getElementById('addnoteform');
  note.style.display = "block";
}

function editNote(id, title, category, content) {
  var note = document.getElementById('editNoteForm');
  document.getElementById('catsEdit').value=category;
  document.getElementById('editTitle').value=title;
  document.getElementById('editnotecontent').value=content;
  document.getElementById('noteIDEdit').value=id;
  note.style.display = "block";
}