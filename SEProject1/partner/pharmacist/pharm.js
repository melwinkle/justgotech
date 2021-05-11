function upd() {

    var dname = " ";
    var dtype=" ";
    var desc=" ";
    var md=" ";
    var ed=" ";
    var pri=" ";
    var quan=" ";
    var quer=" ";
    var pid=m;
    var ph=id;
    var myTab = document.getElementById('table');

    // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
    for (let i = 1; i < myTab.rows.length; i++) {


        // GET THE CELLS COLLECTION OF THE CURRENT ROW.
        var objCells = myTab.rows.item(k).cells;

        // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
        for (var j = 0; j < objCells.length; j++) {
            dname=objCells[0];
            dtype=objCells[1];
            desc=objCells[2];
            md=objCells[4];
            ed=objCells[3];
            pri=objCells[6];
            quan=objCells[5];
            quer=objCells[7];

        }
        window.location.href("update_in.php?edit&dname="+dname +"&dtype="+ dtype +"&desc="+ desc+"&md="+ md+"&ed="+ ed+"&quan="+ quan+"&pri="+ pri+"&quer="+ quer+ "did="+pid+"&pid="+ph) ;
        
    }
}