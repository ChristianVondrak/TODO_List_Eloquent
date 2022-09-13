$(document).ready(function() {
    $('.remove-to-do').click(function() {
        const id = $(this).attr('id');
        var count = $(".show-todo-section").find(".todo-item").length;
        $.post("app/controllers/remove.php", {
                id: id
            },
            (data) => {
                if (data) {
                    $(this).parent().hide(600);
                    setTimeout(
                        function() {
                            location.reload();
                        }, 600);
                }
            });

        if (count == 1) {
            setTimeout(
                function() {
                    location.reload();
                }, 600);
        }
    });

    $(".check-box").click(function(e) {
        const id = $(this).attr('data-todo-id');
        $.post('app/controllers/check.php', {
                id: id
            },
            (data) => {

                console.log(data);
                if (data != 'error') {

                    const h2 = $(this).next();
                    if (data === '1') {
                        h2.removeClass('checked');
                    } else {
                        h2.addClass('checked');
                    }
                }
            }

        );
    });

    $('.edit').click(function() {
        const id = $(this).attr('id');
        const input = $(this).next().next();
        const confirm = $(this).next();
        input.removeClass('hidden');
        confirm.removeClass('hidden');
        $(this).addClass('hidden');
    });
    $('.confirm').click(function() {
        const id = $(this).attr('id');
        const input= $(this).next();
        var inputValue = input.val();
        console.log(inputValue);
        $.post('app/controllers/edit.php', {
                id: id,
                inputValue: inputValue
            },
            (data) => {
                console.log(inputValue)
                $(".input-edit").addClass('hidden');
                $(".edit").removeClass('hidden');
                $(".confirm").addClass('hidden');
                location.reload();
            });
    });


});