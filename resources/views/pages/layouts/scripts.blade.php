<script>
    function adjustMargins() {
        const blocks = document.querySelectorAll('.blog_details');

        blocks.forEach(block => {
            const imgs = block.querySelectorAll('img');
            imgs.forEach(img => {
                if (img) {
                    const imgRect = img.getBoundingClientRect();
                    const blockRect = block.getBoundingClientRect();

                    const spaceLeft = imgRect.left - blockRect.left;
                    const spaceRight = blockRect.right - imgRect.right;

                    if (spaceLeft > spaceRight) {
                        img.style.margin = '12px 0px 18px 23px';
                    } else {
                        img.style.margin = '12px 17px 18px 0px';
                    }
                }
            })
        });
    }

    window.onload = adjustMargins;

    window.addEventListener('resize', adjustMargins);
</script>
<script>
    $(document).ready(function() {
        $('.post_comment').on('click', function(e) {
            e.preventDefault();

            var name = $('#name').val();
            var email = $('#email').val();
            var location_id = $('#location_id').val();
            var parent_id = $('#parent_id').val();
            var comment = $('textarea[name="comment"]').val();

            if (name && email && comment) {
                $.ajax({
                    type: 'POST',
                    url: '/api/save-comment',
                    data: {
                        name: name,
                        email: email,
                        location_id: location_id,
                        parent_id: parent_id,
                        comment: comment
                    },
                    success: function(response) {
                        alert('Comment successfully added!');
                        $('#name').val('');
                        $('#email').val('');
                        $('#parent_id').val('');
                        $('textarea[name="comment"]').val('');
                    },
                    error: function(jqXHR, status, error) {
                        console.log('AJAX Error: ' + error);

                        if (jqXHR.status === 0) {
                            alert('Network error. Check network connection');
                        } else if (jqXHR.status === 404) {
                            alert('Page not found');
                        } else if (jqXHR.status === 500) {
                            alert('Internal server error [500].');
                        } else if (status === 'parsererror') {
                            alert('Parse jsonm error.');
                        } else if (status === 'timeout') {
                            alert('Request timeout');
                        } else if (status === 'abort') {
                            alert('Request was canceled.');
                        } else {
                            alert('Unknown error: ' + jqXHR.responseText);
                        }
                    }
                });
            } else {
                alert('Please fill in all fields!');
            }
        });

        $('.subscription').on('click', function(e) {
            e.preventDefault();

            let email = $('#inlineFormInputGroup').val();

            if (email) {
                $.ajax({
                    type: 'POST',
                    url: '/api/subscribe',
                    data: {
                        email: email,
                    },
                    dataType: 'json',
                    success: function(response) {
                        alert(response.message);
                        $('#inlineFormInputGroup').val('');
                    },
                    error: function(jqXHR, status, error) {
                        console.error('AJAX Error:', status, error);

                        if (jqXHR.status === 0) {
                            alert('Network error. Check network connection');
                        } else if (jqXHR.status === 404) {
                            alert('Page not found');
                        } else if (jqXHR.status === 500) {
                            alert('Internal server error [500].');
                        } else if (status === 'parsererror') {
                            alert('Parse jsonm error.');
                        } else if (status === 'timeout') {
                            alert('Request timeout');
                        } else if (status === 'abort') {
                            alert('Request was canceled.');
                        } else {
                            alert('Unknown error: ' + jqXHR.responseText);
                        }
                    },
                    complete: function() {
                        console.log('AJAX запрос завершен.');
                    }
                });
            } else {
                alert('Please fill in email field!');
            }
        });
    });
</script>
