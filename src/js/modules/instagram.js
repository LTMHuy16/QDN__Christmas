
export default function instagram() {

  $.ajax({
    url: 'https://www.juicer.io/api/feeds/jeris?filter=Instagram',
    method: 'GET',
    dataType: 'json',
    success: data => {
      let html = '';
      let i = 0;
      for (let item of data.posts.items) {
        html += '<div class="insta-item">';
        html += '<a href="' + item.full_url + '" target="_blank">';
        html += '<img src="' + item.image + '" alt="' + item.id + '" />';
        html += '</a>';
        html += '</div>';
        i++;
        if (i >= 6) {
          break;
        }
      }
      $('#instagram-feeds').prepend(html);
    },
    error: () => {
      alert('Error fetching Instagram posts!');
    }
  });

}