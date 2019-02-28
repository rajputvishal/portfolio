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
})