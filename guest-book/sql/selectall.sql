SELECT *
FROM messages
    LEFT JOIN files ON messages.FileId = files.id;