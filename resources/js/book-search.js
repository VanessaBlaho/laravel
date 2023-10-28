
const search = () => {
    const searchInput = document.querySelector('.searchbar');
    const resultsContainer = document.querySelector('.search-box');

    searchInput.addEventListener('input', async function () {
        // Get the search query from the input field
        const searchQuery = this.value;

        // Clear the results container
        resultsContainer.innerHTML = '';

      

        if (searchQuery.trim() !== '') {
            // Make an AJAX request using fetch or axios
            const response = await fetch(`/api/books/search/${searchQuery}`);
         ////
         const data = await response.json();
        //  console.log(data);

            data.forEach((book)=> {
                const bookElement= document.createElement('div');
                bookElement.classList.add("search_book");
                bookElement.innerHTML= `
                <h2>${book.title}</h2>
                <img src="${book.image}" class="book-image:"><img>`;
                resultsContainer.appendChild(bookElement);
        });
        } else{
            console.log('error fetching data');
        
      
    }
    });

}
search()


// const thatsSoFetch = async () => {
//     const response = await fetch(url2);
//     const data = await response.json();
//     console.log(data);
  
//     const latestBooks = document.getElementById("latest-books");
//     console.log(latestBooks);
  
//     data.forEach((book) => {
//       const bookDiv = document.createElement("div");
//       bookDiv.classList.add("book"); // Add the class here
//       bookDiv.innerHTML = `
//               <h2>${book.title}</h2>
//               <p>Author: ${book.authors[0].name}</p>
//               <p>Price: ${book.price}</p>
//               <img src="${book.image}" class="book-image"><img>
//           `;
//       latestBooks.appendChild(bookDiv);
//     });
//   };
  
//   thatsSoFetch();