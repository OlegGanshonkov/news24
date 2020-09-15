FROM nginx:1.19.2-alpine

ARG USER_ID
ARG GROUP_ID

# change group to own
RUN apk add shadow && groupmod -o -g ${GROUP_ID} www-data
# add user to own
RUN adduser -D -H -u ${USER_ID} -s /bin/bash www-data -G www-data

