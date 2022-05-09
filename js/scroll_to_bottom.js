const messages = document.getElementById('main_chat_window');

function appendMessage() {
	const message = document.getElementsByClassName('container_sent')[0];
  const message1 = document.getElementsByClassName('container_recived')[0];
  const newMessage = message.cloneNode(true);
  const newMessage1 = message1.cloneNode(true);
  messages.appendChild(newMessage);
  messages.appendChild(newMessage1);
}

function getMessages() {
	// Prior to getting your messages.
  shouldScroll = messages.scrollTop + messages.clientHeight === messages.scrollHeight;
  /*
   * Get your messages, we'll just simulate it by appending a new one syncronously.
   */
  // After getting your messages.
  if (shouldScroll) {
    scrollToBottom();
  }
}

function scrollToBottom() {
  messages.scrollTop = messages.scrollHeight;
}

scrollToBottom();
