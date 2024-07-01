console.log('Modals inited');
const callbackModal = $('#callback-modal').plainModal({duration: 500});
const orderModal = $('#order-modal').plainModal({duration: 500});
const compareModal = $('#compare-modal').plainModal({duration: 500});

modalInit(callbackModal, '.btn-callback');
modalInit(orderModal, '.btn-order');
modalInit(compareModal, '.btn-compare');

function modalInit(modal, btnName) {
    const btn = $(btnName);

    btn.click(function() {
        modal.plainModal('open');
        btn.addClass('active');
    });
    modal.find( '.plainmodal-close').click(function() {
        modal.plainModal('open');
    });
};