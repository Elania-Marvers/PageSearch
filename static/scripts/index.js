document.getElementById('searchForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    const query = document.getElementById('query').value;
    
    // Display loading message
    document.getElementById('results').innerHTML = "Searching...";

    // Make a request to the backend PHP script (mockup)
    const response = await fetch(`/search.php?query=${encodeURIComponent(query)}`);
    const results = await response.json();
    
    // Display results
    document.getElementById('results').innerHTML = results.map(item => `<p>${item}</p>`).join('');
});
