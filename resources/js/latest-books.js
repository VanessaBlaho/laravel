const url =
  "https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php";

const url2 = "/api/books/latest";

const thatsSoFetch = async () => {
  const response = await fetch(url2);
  const data = await response.json();
  console.log(data);

  const latestBooks = document.getElementById("latest-books");
  console.log(latestBooks);

  data.forEach((book) => {
    const bookDiv = document.createElement("div");
    bookDiv.classList.add("book"); // Add the class here
    bookDiv.innerHTML = `
            <h2>${book.title}</h2>
            <p>Author: ${book.authors[0].name}</p>
            <p>Price: ${book.price}</p>
            <img src="${book.image}" class="book-image"><img>
        `;
    latestBooks.appendChild(bookDiv);
  });
};

thatsSoFetch();










