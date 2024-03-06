CREATE TABLE `faq` (
  `sender_name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- INSERT INTO faq (sender_name, source, destination) 
-- VALUES ('$senderName', '$source', '$destination')


CREATE TABLE `shipments` (
  `sender_name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
 `recipient_name` varchar(255) NOT NULL,
 `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- INSERT INTO faq (sender_name, source, destination, recipient_name, product_name) 
-- VALUES ('$senderName', '$source', '$destination', '$recipientName', '$productName')


CREATE TABLE `users` (
  `Full Names` varchar(255) NOT NULL,
  `Phone Number` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ID Number` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm Password` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- INSERT INTO users (`Full Names`, `Phone Number`, `Email`, `ID number`, `Password`, `Confirm password`) 
--             VALUES ('$fullNames', '$phoneNumber', '$email', '$id_number', '$password', '$passwordd')
