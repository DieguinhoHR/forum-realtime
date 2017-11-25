<template>
    <div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">
                Diego {{ replied }}
            </span>
            <blockquote>
                Rerum saepe itaque ea harum nostrum ut perferendis. Id maxime incidunt quae. Ut laborum quas est et eveniet nostrum. Laudantium blanditiis voluptas praesentium excepturi illum omnis reprehenderit voluptates.
            </blockquote>
        </div>

        <div class="card-content">
            <span class="card-title">
                Diego {{ replied }}
            </span>
            <blockquote>
                Rerum saepe itaque ea harum nostrum ut perferendis. Id maxime incidunt quae. Ut laborum quas est et eveniet nostrum. Laudantium blanditiis voluptas praesentium excepturi illum omnis reprehenderit voluptates.
            </blockquote>
        </div>

        <div class="card-content">
            <span class="card-title">
                Diego {{ replied }}
            </span>
            <blockquote>
                Rerum saepe itaque ea harum nostrum ut perferendis. Id maxime incidunt quae. Ut laborum quas est et eveniet nostrum. Laudantium blanditiis voluptas praesentium excepturi illum omnis reprehenderit voluptates.
            </blockquote>
        </div>

        <div class="card grey lighten-4">
            <div class="card-content">
                <span class="card grey lighten-4">
                    {{ reply }}
                </span>

                <form>
                    <div class="input-field">
                        <textarea rows="10" class="materialize-textarea" :placeholder="yourAnswer">
                        </textarea>
                    </div>
                    <button type="submit" class="btn red accent-2">{{ send }}</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        props: [
          'replied',
          'reply',
          'yourAnswer',
          'send'
        ]
    }
</script>
