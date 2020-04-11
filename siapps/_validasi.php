<script>
    function nilai_valid(value,label)
    { if (value > 0)
        return [true,""];
      else
        return [false,label+" : Bilangan dan nilainya > 0"];
    }

    function sg_valid(value,label)
    { if (value >= 0.5000 &&  value <= 1.0000)
        return [true,""];
      else
        return [false,label+" nilainya antara 0.5000 - 1.0000"];
    }

    function tgl_valid(value,label)
    { var batastgl = new Date();
	  var dd = batastgl.getDate()-3;
	  var mm = batastgl.getMonth()+1; 
	  var yyyy = batastgl.getFullYear();
	  if(dd<10) { dd='0'+dd; } 
	  if(mm<10) { mm='0'+mm; } 
	  batastgl = dd+'-'+mm+'-'+yyyy;
	  if (value > batastgl)
        return [true,""];
      else
        return [false,label+" pemasukan data kedaluwarsa !"];
    }
	
</script>
