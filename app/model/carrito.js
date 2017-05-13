function Carrito (){
this.cursos=[];
this.total=0;
}

Carrito.prototype.anyade=function(articulo){
this.articulos.push(articulo);
}

Carrito.prototype.mostrar=function(){
	ticket="Fecha: " + this.fecha + "\n";
	ticket+="Cliente: " + this.cliente + "\n";
	ticket+="    Articulos en Carrito   \n";

	for (i=0;i<this.cursos.length;i++)
		{
			ticket+=this.articulos[i].id + "\t" + this.articulos[i].precio + "\n";
		}

	ticket+="    Total del Carrito: " + this.totalcarrito();

alert(ticket);
}

Carrito.prototype.totalcarrito=function(){
	total=0;
	for (i=0;i<this.cursos.length;i++)
		{
			total=total+parseInt(this.cursos[i].precio);
		}
	this.total=total;
	return total

}
