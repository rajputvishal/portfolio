Vue.component("my-footer",{
props: ['contacts'],
template: `<v-footer dark height="auto">
            <v-card flat tile class="indigo lighten-1 white--text text-xs-center">
                <v-card-text>
                <v-btn v-for="contact in contacts" class="mx-3 white--text" icon>
                    <v-icon size="24px">{{ contact.class }}</v-icon>
                </v-btn>
                </v-card-text>

                <v-divider></v-divider>

                <v-card-text class="white--text">
                &copy;{{ new Date().getFullYear() }} — <strong>Vishal Rajput</strong>
                </v-card-text>
            </v-card>
            </v-footer>`
});

Vue.component("blog-post-list", {
    props: ['posts'],
    template: `<section><blog-post v-for="post in posts" :post="post" :preview=true></blog-post></section>`
});

Vue.component("blog-post", {
    props: ["post", "preview"],
    template: `<div class="blog-post" :class="{preview : preview } ">
                    <h1  class="blog-time">{{post.time}}</h1>
                    <h1  class="blog-title">{{post.title}}</h1>
                    <h2  class="blog-subtitle">{{post.subtitle}}</h2>
                    <blog-tags :tags="post.tags"></blog-tags>
                    <blog-cover :cover="post.cover"></blog-cover>
                    <blog-content :content="post.content"></blog-content>
                </div>`
});

Vue.component("blog-tags", {
    props: ["tags"],
    template: `<ul class="blog-tags">
                    <blog-tag v-for="tag in tags" :tag="tag"></blog-tag>
                </ul>`
});

Vue.component("blog-tag", {
    props: ["tag"],
    template: `<v-chip class="blog-tag">{{tag}}</v-chip>`
});

Vue.component("blog-cover", {
    props: ["cover"],
    template: `<v-img class="blog-cover" :src="'public/images/cover/'+cover+'.png'" height="290" width="590"></v-img>`
});

Vue.component("blog-content", {
    props: ["content"],
    template: `<div class="blog-content" color="primary" text-color="white">{{content}}</div>`
});