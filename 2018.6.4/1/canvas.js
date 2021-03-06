  
var roundedRect=function(ctx,x,y,width,height,radius,fill,stroke)
{
    ctx.beginPath();

    // draw top and top right corner
    ctx.moveTo(x+radius,y);
    ctx.arcTo(x+width,y,x+width,y+radius,radius);

    // draw right side and bottom right corner
    ctx.arcTo(x+width,y+height,x+width-radius,y+height,radius); 

    // draw bottom and bottom left corner
    ctx.arcTo(x,y+height,x,y+height-radius,radius);

    // draw left and top left corner
    ctx.arcTo(x,y,x+radius,y,radius);

    if(fill){
	    ctx.fill();
    }
    if(stroke){
	    ctx.stroke();
    }

   // Draws the square using lineTo instead of arcTo,
   // just to compare both methods
   ctx.save();
   ctx.strokeStyle="pink";
   ctx.lineWidth=3;  // ou ce que tu veux
   

   ctx.beginPath();
   ctx.moveTo(x,y);
   ctx.lineTo(x+width, y);
   ctx.lineTo(x+width, y+height);
   ctx.lineTo(x, y+height);
   ctx.closePath();

   ctx.stroke();

   ctx.restore();
}  
  
var canvas=document.getElementById('myCanvas');
var ctx=canvas.getContext('2d');
  
ctx.strokeStyle='rgb(150,0,0)';
ctx.fillStyle='rgb(0,150,0)';
ctx.lineWidth=7;
roundedRect(ctx,15,15,160,120,20,true,true);