/* define functions here */

// Calculate the total cost of one cart item (quantity * price)
function calculateTotal(quantity, price) {
    return quantity * price;
}

// Output a single row of the shopping cart table
// function outputCartRow(file, title, quantity, price, total) {
//     document.write('<tr>');
//     document.write(`<td><img src="images/${file}"></td>`);
//     document.write(`<td>${title}</td>`);
//     document.write(`<td>${quantity}</td>`);
//     document.write(`<td>$${price.toFixed(2)}</td>`);
//     document.write(`<td>$${total.toFixed(2)}</td>`);
//     document.write('</tr>');
// }

function outputCartRow(file, title, quantity, price, total) {
    const tbody = document.querySelector("tbody");

    const row = document.createElement("tr");

    const imgCell = document.createElement("td");
    const img = document.createElement("img");
    img.src = `images/${file}`;
    imgCell.appendChild(img);
    row.appendChild(imgCell);

    const titleCell = document.createElement("td");
    titleCell.textContent = title;
    row.appendChild(titleCell);

    const quantityCell = document.createElement("td");
    quantityCell.textContent = quantity;
    row.appendChild(quantityCell);

    const priceCell = document.createElement("td");
    priceCell.textContent = `$${price.toFixed(2)}`;
    row.appendChild(priceCell);

    const totalCell = document.createElement("td");
    totalCell.textContent = `$${total.toFixed(2)}`;
    row.appendChild(totalCell);

    tbody.appendChild(row);
}
