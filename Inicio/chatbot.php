<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Estilos/chatbot.css">
</head>
<body>
    <!-- Burbuja de Chat -->
    <div id="chat-bubble" class="rounded-circle bg-primary p-3 text-center text-white" onclick="openChat()">
        <img src="../img/asistente-de-robot.png" alt="Chat" class="img-fluid">
    </div>

    <!-- Modal de Chat -->
    <div id="chat-modal" class="chat-modal modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chat Bot</h5>
                    <button type="button" class="close" onclick="closeChat()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="chat-box">
                        <div id="messages">
                            <div class="message bot alert alert-secondary">¡Hola! Por favor, regístrate.</div>
                        </div>
                        <form id="registration-form" onsubmit="registerUser(event)">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Correo Electrónico" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function openChat() {
                    $('#chat-modal').modal('show');
                }

                function closeChat() {
                    $('#chat-modal').modal('hide');
                }

                function registerUser(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;

            if (name && email) {
                $.ajax({
                    url: '../Controladores/register_user.php', // Ajusta la ruta según tu estructura de carpetas
                    type: 'POST',
                    data: { nombre: name, correo: email },
                    success: function(response) {
                        if (response.trim() === 'success') {
                            localStorage.setItem('registered', 'true');
                            const messageBox = document.getElementById('messages');
                            messageBox.innerHTML += `<div class="message bot alert alert-secondary">Gracias por registrarte, ${name}!</div>`;
                            document.getElementById('registration-form').style.display = 'none';
                        } else {
                            alert('Error al registrar. Por favor, intenta nuevamente.');
                        }
                    },
                    error: function() {
                        alert('Error en la conexión. Por favor, intenta nuevamente.');
                    }
                });
            }
        }

        window.onload = function() {
            if (localStorage.getItem('registered')) {
                document.getElementById('registration-form').style.display = 'none';
                const messageBox = document.getElementById('messages');
                messageBox.innerHTML += `<div class="message bot alert alert-secondary">¡Gracias por registrarte!</div>`;
            }
        }
    </script>
</body>
</html>
