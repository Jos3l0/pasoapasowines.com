<div id="jet-popup-library" :class="itemClasses">
    <span class="jet-popup-library__spinner-loader main-proccesing-loader" v-if="progressStatus">
        <svg width="16" class="loader-icon" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.9023 9.06541L14.4611 9.55376C14.3145 10.2375 14.0214 10.8967 13.6305 11.5316L14.2901 12.899C14.3145 12.9478 14.2901 12.9966 14.2656 13.0455L12.971 14.3396C12.9221 14.364 12.8733 14.3884 12.8244 14.364L11.4565 13.7047C10.8458 14.0954 10.1863 14.364 9.47786 14.5105L8.98931 15.9512C8.98931 15.9756 8.96489 16 8.8916 16H7.08397C7.03511 16 6.98626 15.9756 6.96183 15.9267L6.47328 14.4861C5.78931 14.3396 5.12977 14.0466 4.49466 13.6559L3.12672 14.3152C3.07786 14.3396 3.02901 14.3152 2.98015 14.2908L1.6855 12.9966C1.66107 12.9478 1.63664 12.899 1.66107 12.8501L2.32061 11.4828C1.92977 10.8723 1.66107 10.213 1.5145 9.50493L0.0732824 9.01658C0.0244275 8.99216 0 8.96774 0 8.89449L0 7.08759C0 7.03875 0.0244275 6.98992 0.0732824 6.9655L1.5145 6.47715C1.66107 5.79346 1.9542 5.13418 2.34504 4.49933L1.6855 3.13194C1.66107 3.08311 1.6855 3.03427 1.70992 2.98544L3.00458 1.69131C3.05344 1.66689 3.10229 1.64247 3.15114 1.66689L4.51908 2.32616C5.12977 1.93548 5.78931 1.66689 6.49771 1.52038L6.98626 0.0797482C7.01069 0.0309124 7.03511 0.00649452 7.1084 0.00649452L8.91603 0.00649452C8.96489 -0.0179234 9.01374 0.0309124 9.03817 0.0797482L9.52672 1.52038C10.2107 1.66689 10.8702 1.9599 11.5053 2.35058L12.8733 1.69131C12.9221 1.66689 12.971 1.69131 13.0198 1.71572L14.3145 3.00986C14.3389 3.05869 14.3634 3.10753 14.3389 3.15636L13.6794 4.52374C14.0702 5.13418 14.3389 5.79346 14.4855 6.50157L15.9267 6.98992C15.9756 7.01434 16 7.03875 16 7.11201V8.91891C15.9756 8.99216 15.9511 9.04099 15.9023 9.06541ZM11.5786 6.9655C10.9924 4.98768 8.91603 3.86447 6.96183 4.45049C4.98321 5.03651 3.85954 7.11201 4.4458 9.06541C5.03206 11.0432 7.1084 12.1664 9.0626 11.5804C11.0412 11.0188 12.1649 8.94332 11.5786 6.9655Z"/></svg>
    </span>
    <transition name="simple-fade">
        <cx-vui-popup
            class="jet-popup-library__popup create-popup"
            v-model="createPopupVisible"
            :footer="false"
            body-width="false"
            @on-cancel="closeCreatePopupHandler"
        >
            <div slot="content">
                <jet-popup-library-create-popup-form></jet-popup-library-create-popup-form>
            </div>
        </cx-vui-popup>
    </transition>
    <transition name="simple-fade">
        <cx-vui-popup
            class="jet-popup-library__popup import-popup"
            v-model="importPopupVisible"
            :footer="false"
            body-width="false"
            @on-cancel="closeImportPopupHandler"
        >
            <div slot="content">
                <jet-popup-library-import-popup-form></jet-popup-library-import-popup-form>
            </div>
        </cx-vui-popup>
    </transition>
    <transition name="simple-fade">
        <cx-vui-popup
            class="jet-popup-library__popup condition-manager-popup"
            v-model="conditionsManagerPopupVisible"
            :footer="false"
            body-width="false"
            @on-cancel="closeConditionsManagerPopupHandler"
        >
            <div class="cx-vui-popup__content-inner" slot="content">
                <jet-popup-library-conditions-manager
                    :popup-id="popupId"
                ></jet-popup-library-conditions-manager>
            </div>
        </cx-vui-popup>
    </transition>
    <transition name="simple-fade">
        <cx-vui-popup
            class="jet-popup-library__popup settings-manager-popup"
            v-model="settingsManagerPopupVisible"
            :footer="false"
            body-width="false"
            @on-cancel="closeSettingsManagerPopupHandler"
        >
            <div class="cx-vui-popup__content-inner" slot="content">
                <jet-popup-library-settings-manager
                    :popup-id="popupId"
                ></jet-popup-library-settings-manager>
            </div>
        </cx-vui-popup>
    </transition>
</div>