const axios = require('axios');
const cheerio = require('cheerio');

// URL of the website you want to scrape
const url = 'https://myitedu.us';



async function searchKeyword(keyword) {
    try {
        const { data } = await axios.get(url);
        //console.log(data); // Check if the data is being fetched
        const $ = cheerio.load(data);

        $('div').each((index, element) => {
            const text = $(element).text();
            if (text.includes(keyword)) {
                console.log(`Keyword "${keyword}" found in element:`, element);
                //console.log(`Text: ${text}`);
            }
        });
    } catch (error) {
        //console.error(`Error fetching the webpage: ${error.message}`);
    }
}

searchKeyword('div');



