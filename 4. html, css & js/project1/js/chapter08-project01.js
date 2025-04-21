/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */

   let subtotal = 0;

   for (let i = 0; i < filenames.length; i++) {
       let total = calculateTotal(quantities[i], prices[i]);
       subtotal += total;
       outputCartRow(filenames[i], titles[i], quantities[i], prices[i], total);
   }
   
   let tax = subtotal * 0.10;
   let shipping = subtotal > 1000 ? 0 : 40;
   let grandTotal = subtotal + tax + shipping;
   
   document.write(`<tr class="totals"><td colspan="4">Subtotal</td><td>$${subtotal.toFixed(2)}</td></tr>`);
   document.write(`<tr class="totals"><td colspan="4">Tax</td><td>$${tax.toFixed(2)}</td></tr>`);
   document.write(`<tr class="totals"><td colspan="4">Shipping</td><td>$${shipping.toFixed(2)}</td></tr>`);
   document.write(`<tr class="totals focus"><td colspan="4">Grand Total</td><td>$${grandTotal.toFixed(2)}</td></tr>`);
   