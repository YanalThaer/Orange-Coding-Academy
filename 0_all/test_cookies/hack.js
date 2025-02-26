document.body.innerHTML = '';
document.body.style.margin = "0";
document.body.style.overflow = "hidden";

let img = document.createElement('img');
img.src = "https://www.gifcen.com/wp-content/uploads/2023/06/hacker-gif-8.gif";
img.style.position = "fixed";
img.style.top = "0";
img.style.left = "0";
img.style.width = "100vw";
img.style.height = "100vh";
img.style.objectFit = "cover";
document.body.appendChild(img);

let text = document.createElement('div');
text.innerText = "YOU ARE HACKED!";
text.style.position = "fixed";
text.style.top = "50%";
text.style.left = "50%";
text.style.transform = "translate(-50%, -50%)";
text.style.fontSize = "50px";
text.style.color = "red";
text.style.fontWeight = "bold";
text.style.textShadow = "5px 5px 10px black";
text.style.zIndex = "1000";
document.body.appendChild(text);