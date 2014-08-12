
function mime_types_extended_selectall(field) {
  for (i = 0; i < field.length; i++) {
    field[i].checked = true;
  }
  return true;
}
function mime_types_extended_deselectall(field) {
  for (i = 0; i < field.length; i++) {
    field[i].checked = false;
  }
  return true;
}
