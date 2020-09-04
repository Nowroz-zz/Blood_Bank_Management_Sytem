/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
};

var date = new Date();

var donDate = date.toISOString().substr(0, 10);
document.getElementById("donDate").value = donDate;

var expDate = date.addDays(42).toISOString().substr(0, 10);
document.getElementById("expDate").value = expDate;
