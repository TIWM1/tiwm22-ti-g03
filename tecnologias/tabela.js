var x,xmlhttp,xmlDoc
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "comparacao_idade.xml", false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML; 
x = xmlDoc.getElementsByTagName("ComparacaoIdade");
table="<tr><th>Artist</th><th>Title</th></tr>";
for (i = 0; i <x.length; i++) { 
  table += "<tr onclick='displayComparacaoIdade(" + i + ")'><td>";
  table += x[i].getElementsByTagName("Idade Gatos")[0].childNodes[0].nodeValue;
  table += "</td><td>";
  table +=  x[i].getElementsByTagName("Idade Humana")[0].childNodes[0].nodeValue;
  table += "</td></tr>";
}
document.getElementById("tabela").innerHTML = table;