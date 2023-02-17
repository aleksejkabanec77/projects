INSERT categories(title, character_code) VALUES('', '');

INSERT lots(
            date_creation, 
            title_lot, 
            description, 
            image, 
            starting_price,
            date_completion_lot, 
            rate_step, 
            author_id, 
            winner_id, 
            categories_id
            ) 
VALUES('', '', '', '', '', '', '', '', '', ''); 

INSERT bids(
            date_placement, 
            price_desired, 
            user_id_bid, 
            lot_id
            ) 
VALUES('', '', '', ''); 

INSERT users(
            date_registration, 
            email_users, 
            nickname_users, 
            passwords_users, 
            contacts_users, 
            users_lot_id, 
            users_bid_id
            ) 

VALUES('', '', '', '', '', '', '');
