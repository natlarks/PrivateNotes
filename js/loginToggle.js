function toRegister() {
  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "none";
  login[1].style.display = "none";

  var signup = document.getElementsByClassName('signup');
  signup[0].style.display = "block";
  signup[1].style.display = "block";

  var resetForm = document.getElementById('resetPWForm');
  resetForm.style.display = "none";
}

function toLogin() {
  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "block";
  login[1].style.display = "block";

  var signup = document.getElementsByClassName('signup');
  signup[0].style.display = "none";
  signup[1].style.display = "none";

  var resetForm = document.getElementById('resetPWForm');
  resetForm.style.display = "none";
}

function resetPW() {
  var resetForm = document.getElementById('resetPWForm');
  resetForm.style.display = "block";

  var login = document.getElementsByClassName('logindiv');
  login[0].style.display = "none";
  login[1].style.display = "none";

  var signup = document.getElementsByClassName('signup');
  signup[1].style.display = "block";
}

function resetConfirmed(){
  var resetForm = document.getElementById('resetPWForm');
  resetForm.style.display = "none";

  var resetConfirmed = document.getElementById('resetConfirmed');
  resetConfirmed.style.display = "block";
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

function deleteNote(id, title) {
  var note = document.getElementById('deleteNoteForm');
  deleteNoteTitle.innerText=title;
  document.getElementById('noteIDDelete').value=id;
  note.style.display = "block";
}

function hideForm(formName) {
  var form = document.getElementById(formName);
  form.style.display = "none";
}

function sortNotes() {
  var form = document.getElementById('sortNoteForm');
  form.style.display = "block";
}

function showCategory(){
  var option = document.getElementById('catsSort');
  if (option.value == "Category") {
    var form = document.getElementById('catDropdown');
    form.style.display = "block";
  }
}