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
        $('.primary-btn').on('click', function(e) {
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
                        alert('Комментарий успешно сохранен!');
                        $('#name').val('');
                        $('#email').val('');
                        $('#parent_id').val('');
                        $('textarea[name="comment"]').val('');
                    },
                    error: function(xhr, status, error) {
                        alert('Произошла ошибка: ' + error);
                    }
                });
            } else {
                alert('Пожалуйста, заполните все поля!');
            }
        });
    });
</script>