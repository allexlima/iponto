#!/bin/sh

export DATABASE_URL="postgres://allex:allex@localhost:5432/iponto_db"
php -S localhost:8080
