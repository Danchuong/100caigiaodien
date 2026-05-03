# OLIPOP — Refero Style

- Refero URL: https://styles.refero.design/style/c6ec55c7-0bd9-47c5-a4d2-669b7790c9cc
- Site URL: https://drinkolipop.com
- ID: c6ec55c7-0bd9-47c5-a4d2-669b7790c9cc
- Theme: light
- Industry: ecommerce
- Created: 2026-02-10T13:50:55.000Z
- Ranks: newest: 1208, popular: 145, trending: 384

> Whimsical soda shop on cream. Bold, rounded letterforms and a palette of comforting dark teal and creamy white, accented by juicy fruit colors, define its inviting, playful core.

## Description

This design system evokes a sense of playful nostalgia fused with modern health consciousness. Dominant dark teal (#14433d) and creamy off-white (#fdf7e7) establish a comforting, natural palette, punctuated by a diverse array of pastel and vivid fruit-inspired accent colors for product showcase. The custom 'WindsorEF' typeface with weighty, generous letterforms and tight line-height gives headings an almost hand-drawn, vintage soda shop feel, while the 'Ano' sans-serif provides crisp, legible body text. Rounded corners and liberal padding contribute to an approachable, soft aesthetic, countering the sharp contrast of the headline fonts.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Sea Teal | #14433d | brand | Primary brand color, text, navigation links, primary button backgrounds, icon fills — establishes the brand's core identity with a natural, sophisticated tone. |
| Creamy Canvas | #fdf7e7 | neutral | Page backgrounds, card backgrounds, certain button text — provides a warm, inviting canvas for content. |
| Cloud Burst Gray | #d3e8e3 | neutral | Section background for product showcases, subtle secondary card backgrounds — acts as a light, cool divider. |
| Ash Slate | #3a3a3a | neutral | Body text, secondary button text, links, detailed information — provides strong readability against light backgrounds. |
| Pure White | #ffffff | neutral | Button backgrounds, form fields, page elements needing high contrast — universal achromatic base. |
| Ruby Red | #7e0022 | brand | Promotional text, key headlines — a vivid, deep red communicating energy without aggression. |
| Candy Apple Red | #febac4 | accent | Product card background — a soft, pastel version of the brand red. |
| Lavender Bloom | #e3d2ed | accent | Product card background — a muted purple for product differentiation. |
| Tropical Sky | #4ac1e0 | accent | Product card background — a clear, moderate blue suggesting freshness. |
| Mellow Yellow | #fdf4b5 | accent | Product card background — sunny, moderate yellow. |
| Lime Spritz | #95d95d | accent | Product card background — vibrant green for a fresh, zesty feel. |
| Peach Fuzz | #ffc3b3 | accent | Product card background — a soft, warm orange. |
| Aqua Pop | #2ad2c9 | accent | Highlight and active states for interactive elements, accent buttons — vibrant teal provides a playful pop. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| WindsorEF | Georgia Pro | 700, 800, 900 | 20px, 32px, 48px, 52px, 72px, 80px | 1.00 | Display and marketing headlines – its heavy, rounded, and condensed letterforms, especially at 72px and 80px, create a retro soda-fountain aesthetic that is distinctive and memorable. It shouts 'nostalgia' without being kitsch. |
| Ano | Inter | 400, 600, 700 | 12px, 14px, 16px, 18px, 20px, 22px, 24px | 1.00, 1.20, 1.26, 1.40, 1.48, 1.50, 1.56, 1.60, 1.67, 1.80, 1.82, 1.88, 2.33 | Body copy, subheadings, navigation, and button text – this custom sans-serif provides excellent readability and a friendly, minimalist contrast to the display font. Its diverse weights support clear hierarchy. |
| Helvetica | Arial | 400 | 16px | 1.50 | Functional text for specific buttons and icons – used sparingly, it provides a stable, unobtrusive baseline for interface elements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.56 |  |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.48 |  |
| heading-sm | 20 | 1.2 |  |
| heading | 24 | 1.2 |  |
| heading-lg | 32 | 1 |  |
| display-sm | 48 | 1 |  |
| display | 72 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "49px",
    "buttons": "50px",
    "circularElements": "100px"
  },
  "elementGap": "8-20px",
  "sectionGap": "40-80px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Product Flavor Cards Row



### Rewards Banner — Get Rewarded for Sipping



### Shipping Announcement Banner + Button Group



### Primary Action Button

**Role:** Primary calls to action in hero sections and prominent areas.

Background: Deep Sea Teal (#14433d), Text: Creamy Canvas (#fdf7e7), Border: Creamy Canvas (#fdf7e7), Radius: 50px, Padding: 10px vertical, 32px horizontal. Large, inviting pill shape.

### Secondary Action Button

**Role:** Secondary CTAs, navigation items that feel like buttons.

Background: Pure White (#ffffff), Text: Deep Sea Teal (#14433d), Border: None, Radius: 50px, Padding: 1px vertical, 12px horizontal. Pill shape for visual consistency.

### Text Link Button

**Role:** In-text actionable links that appear as buttons but lack distinct background.

Background: transparent, Text: Deep Sea Teal (#14433d), Border: Deep Sea Teal (#14433d) on top only, Radius: 0px, Padding: 0px. Text-only appearance.

### Circular Icon Button

**Role:** Small interactive elements like quantity selectors or social sharing.

Background: Pure White (#ffffff), Text: Ash Slate (#3a3a3a), Border: None, Radius: 100% (circular), Padding: 1px vertical, 6px horizontal. Small, distinct circular form for iconography.

### Product Display Card

**Role:** Showcasing individual product variants.

Background: Transparent (adapts to section background), Border Radius: 16px, Box Shadow: None, Padding: 15px top, 0px horizontal/bottom. Designed to contain images and minimal text without heavy styling, relying on color accents from the section itself.

### Accent Product Card (Peach)

**Role:** Highlights specific product variants with an accent color background.

Background: #febac4 (Candy Apple Red), Border Radius: 16px, Box Shadow: None, Padding: 0px. Uses a solid accent background to differentiate product types.

### Accent Product Card (Lavender)

**Role:** Highlights specific product variants with an accent color background.

Background: #e3d2ed (Lavender Bloom), Border Radius: 16px, Box Shadow: None, Padding: 0px. Uses a solid accent background to differentiate product types.

### Accent Product Card (Buttercup)

**Role:** Highlights specific product variants with an accent color background.

Background: #fdf4b5 (Mellow Yellow), Border Radius: 16px, Box Shadow: None, Padding: 0px. Uses a solid accent background to differentiate product types.

### Subscription Text Input

**Role:** Form fields for email subscription or search.

Background: Pure White (#ffffff), Text: Deep Sea Teal (#14433d), Border: Deep Sea Teal (#14433d), Radius: 49px, Padding: 10px vertical, 24px horizontal. Pill-shaped input with a prominent brand-colored border.

## Do's

- Do use WindsorEF at weights 700-900 for all primary headings, particularly 72px and 80px, to establish the distinct brand voice.
- Do apply a 50px border-radius to all buttons and a 49px radius to input fields, ensuring a consistent soft, pill-shaped interaction aesthetic.
- Do use Deep Sea Teal (#14433d) for all primary interactive elements like buttons and active navigation links.
- Do ensure Creamy Canvas (#fdf7e7) or Cloud Burst Gray (#d3e8e3) serve as the primary background colors for sections, providing a light, inviting base.
- Do employ a diverse array of pastel and vivid accent colors (e.g., #febac4, #e3d2ed, #fdf4b5) for product cards to visually differentiate offerings.
- Do maintain a compact vertical rhythm, with section gaps typically between 40-80px and elemental gaps between 8-20px.
- Do use Ash Slate (#3a3a3a) for all primary body text to ensure strong readability against light backgrounds.

## Don'ts

- Don't use overly sharp or angular graphic elements; everything should lean towards rounded and soft forms (min 16px radius for cards).
- Don't dilute the impact of Deep Sea Teal (#14433d) by using other saturated primary colors for main calls to action.
- Don't introduce additional display fonts; WindsorEF is exclusive for prominent headlines, and Ano for supporting text.
- Don't use strong box shadows for cards or general elevation; the design relies on color and slight border separation for depth.
- Don't use generic system UI fonts like Helvetica for prominent information; it's reserved for subtle functional text.
- Don't deviate from the established accent color palette for product categorization; stick to the provided range (e.g., #febac4, #e3d2ed, #fdf4b5, #4ac1e0).

## Layout

The page primarily uses a max-width contained layout, centered on the screen, though the hero section spans full-width with text and a button contained within. The hero showcases a split background (cream and teal) with a prominent headline. Subsequent sections are typically full-width with a light background (Creamy Canvas #fdf7e7 or Cloud Burst Gray #d3e8e3), utilizing a multi-column card grid (5 columns) for product display. Content often follows a stacked, centered pattern for headlines and subtext, creating a clear visual hierarchy. Navigation is a sticky top bar, reinforced by a secondary 'Find In Store' link. Sections have distinct but not visually harsh vertical separation, primarily through color changes or content blocks. There's a playful balance between structured content and whimsical, off-center illustrative elements.

## Imagery

The visual language is product-centric, featuring tightly cropped product cans on solid, often pastel-colored backgrounds. Treatment is isolated and contained, with a consistent 16px border-radius on implied card containers. Photography is vibrant and well-lit, focusing solely on the product. Secondary visuals include playful, illustrative graphics (like the glass and jacket) that reinforce the retro, celebratory feel. Icons are monochrome, filled, and bold. The overall density is balanced, with imagery playing a key role in breaking up text and adding visual interest, creating an 'album cover' like feel for product presentation.

## Similar Brands

| Business | Why |
| --- | --- |
| Poppi | Shares a similar 'healthy soda' product focus with a bright, colorful, and approachable aesthetic. Utilizes vibrant product imagery on colored backgrounds. |
| Chobani (packaging style) | Employs an illustrative, friendly, and often rounded typeface for branding, combined with a clean, pastel-influenced palette for product differentiation. |
| Happy Socks | Uses bright, playful accent colors against a clean background, often incorporating bold, stylized typography and clear product presentation without heavy shadows. |
| Mailchimp (old branding) | Had a similar friendly, slightly quirky typographic approach with a clean layout and occasional playful illustrations, using a limited primary palette with strong accent colors. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #3a3a3a (Ash Slate)
- Background: #fdf7e7 (Creamy Canvas)
- CTA Background: #2ad2c9 (Aqua Pop)
- CTA Text: #fdf7e7 (Creamy Canvas)
- Accent (Product Card): #febac4 (Candy Apple Red)

### 3-5 Example Component Prompts
1. Create a hero section with a split background: left half Creamy Canvas (#fdf7e7), right half Deep Sea Teal (#14433d). Place a headline 'A New Kind of Soda™' using WindsorEF 72px, weight 700, Deep Sea Teal (#14433d). Below it, add body text 'High Fiber. Less Sugar*. Delicious Flavors.' using Ano 18px, weight 400, Deep Sea Teal (#14433d). Include a Primary Action Button 'Shop Now'.
2. Generate a 'Product Display Card' for 'Banana Cream' with a Mellow Yellow (#fdf4b5) background. Use a 16px border-radius, no shadow, and place product image centered with 'Banana Cream' using Ano 16px weight 600, Ash Slate (#3a3a3a) below it. Ensure 15px top padding for the card.
3. Design a 'Subscription Text Input' field. Background Pure White (#ffffff), border Deep Sea Teal (#14433d), 49px border-radius. Placeholder text 'Enter your email' should be Ano 16px, weight 400, Deep Sea Teal (#14433d). Add a small text link button 'Sign Up Now'.
4. Create a header section. Background Creamy Canvas (#fdf7e7). Left aligned navigation links 'Shop', 'Learn', 'Subscribe' using Ano 16px, weight 400, Deep Sea Teal (#14433d) with 20px horizontal element gap. Right aligned 'Find In Store' link and icons, also inheriting Deep Sea Teal (#14433d) for text and icon fill.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775926306299-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775926306299-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c6ec55c7-0bd9-47c5-a4d2-669b7790c9cc-1777567060083-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c6ec55c7-0bd9-47c5-a4d2-669b7790c9cc-1777567060083-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c6ec55c7-0bd9-47c5-a4d2-669b7790c9cc-1777567060083-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c6ec55c7-0bd9-47c5-a4d2-669b7790c9cc-1777567060083-preview-detail-poster.jpg |
