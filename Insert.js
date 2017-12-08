function Add() {
  var user = JSON.stringify({
    Nickname: $("#input1").val(),
    UserPass: $("#input2").val()
  });
  tbUser.push(user);
  localStorage.setItem("tbUser", JSON.stringify(tbUser));
  alert("Cadastro completado com sucesso");
  return true;
}
$("#cadastro").on("submit", function() {
  return Add();
});

