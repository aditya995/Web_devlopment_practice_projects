var canvas,ctx;
windows.onload = init;
function init(){
	canvas=document.querySelector("#mycanvas");
	ctx=canvas.getContext('2d');
	ctx.translate(100, 100);
	ctx.rotate(Math.PI/4);
	ctx.scale(0.5, 0.5);
	drawMonster(0, 0);
}
function drawMonster(x, y) {
     // draw a red rectangle
     
     // head
     ctx.fillStyle='lightgreen';
     ctx.fillRect(x,y,200,200);
     
     // eyes
     ctx.fillStyle='red';
     ctx.fillRect(x+35,y+30,20,20);
     ctx.fillRect(x+140,y+30,20,20);
     
     // interior of eye
     ctx.fillStyle='yellow';
     ctx.fillRect(x+43,y+37,10,10);
     ctx.fillRect(x+143,y+37,10,10);
     
     // Nose
     ctx.fillStyle='black';
     ctx.fillRect(x+90,y+70,20,80);
     
     // Mouth
     ctx.fillStyle='red';
     ctx.fillRect(x+60,y+165,80,20);
	 
	 drawArrow(ctx, -5, 0, 200, 0, 10, 'green');
     drawArrow(ctx, 0, -5, 0, 200, 10, 'green');
}
function drawArrow(ctx, fromx, fromy, tox, toy, arrowWidth, color){
  //variables to be used when creating the arrow
  var headlen = 10;
  var angle = Math.atan2(toy-fromy,tox-fromx);

  ctx.save();
  ctx.strokeStyle = color;

  //starting path of the arrow from the start square to the end square and drawing the stroke
  ctx.beginPath();
  ctx.moveTo(fromx, fromy);
  ctx.lineTo(tox, toy);
  ctx.lineWidth = arrowWidth;
  ctx.stroke();

  //starting a new path from the head of the arrow to one of the sides of the point
  ctx.beginPath();
  ctx.moveTo(tox, toy);
  ctx.lineTo(tox-headlen*Math.cos(angle-Math.PI/7),toy-headlen*Math.sin(angle-Math.PI/7));

  //path from the side point of the arrow, to the other side point
  ctx.lineTo(tox-headlen*Math.cos(angle+Math.PI/7),toy-headlen*Math.sin(angle+Math.PI/7));

  //path from the side point back to the tip of the arrow, and then again to the opposite side point
  ctx.lineTo(tox, toy);
  ctx.lineTo(tox-headlen*Math.cos(angle-Math.PI/7),toy-headlen*Math.sin(angle-Math.PI/7));

  //draws the paths created above
  ctx.stroke();
  ctx.restore();
}