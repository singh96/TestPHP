// Call the dataTables jQuery plugin
$(document).ready(function() {
    for(var i=0;i<1000;i++){
        $('#dataTable tbody').append("<tr><td>07/04/2018</td><td>6:00 PM</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td><td>"+Math.floor((Math.random() * 80) + 1)+"</td></tr>");   
    }
  $('#dataTable').DataTable({
        dom: '<"common"Brfl>tip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
//        searching: false,
        stripeClasses: [ 'odd', 'even' ],
//        bSort: false
  });
});