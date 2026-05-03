# Away — Refero Style

- Refero URL: https://styles.refero.design/style/3ddaa1f6-bebc-44e3-a6df-b653179f3fd9
- Site URL: https://awaytravel.com
- ID: 3ddaa1f6-bebc-44e3-a6df-b653179f3fd9
- Theme: light
- Industry: ecommerce
- Created: 2026-02-16T13:09:04.000Z
- Ranks: newest: 1177, popular: 189, trending: 155

> Luxury travel catalogue

## Description

This system evokes the precise, understated elegance of luxury travel goods, balancing functionality with a subtle hint of aspirational lifestyle. A near-monochromatic palette built on deep charcoal (#111111) and crisp white (#FFFFFF) defines the surfaces, accented by muted, earthy tones in photography. Typography leans into a custom sans-serif for headlines, providing a distinctive voice without being overly loud, reinforced by a tightly tracked, all-caps presentation for key navigation elements. The design prioritizes clear information hierarchy and a clean, almost modular aesthetic, avoiding excessive ornamentation or bold primary colors.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Charcoal | #111111 | neutral | Primary text, headline text, dark button backgrounds, interactive element states. This deep, near-black sets a sophisticated, premium tone. |
| Canvas White | #FFFFFF | neutral | Page backgrounds, card surfaces, light button backgrounds, inverse text. Provides a clean, expansive backdrop. |
| Pale Earth | #f7f4f1 | neutral | Input fields, secondary background areas. A subtle, warm off-white that adds a touch of natural texture. |
| Border Fog | #e5e7eb | neutral | Subtle borders, dividers, outlines for inactive elements. Helps define structure without harsh lines. |
| Muted Gray | #6b7280 | neutral | Secondary text, placeholder text, disabled states. A desaturated gray providing visual relief without losing legibility. |
| Faded Red | #d31b3b | accent | Sale indicators, badge accents, notification states. A vivid red, used sparingly for emphasis. |
| Muted Terracotta | #722519 | brand | Limited accent use, perhaps in specific product highlights or banners. A warm, earthy tone that complements the brand's aesthetic without dominating. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Graphik | system-ui, sans-serif | 400, 500 | 12px, 14px, 15px, 16px, 18px, 32px, 36px, 38px, 56px | 0.85, 1.00, 1.10, 1.13, 1.20, 1.50 | Primary typeface for all UI elements, body text, navigation, and most headings. Its clean, geometric form supports the modern aesthetic. Headlines often use tight letter spacing for a refined presentation. |
| Lyon Display | serif | 400 | 18px, 26px | 1.00, 1.20 | Used for specific body text and subheadings, offering a subtle serif counterpoint to Graphik. It appears selectively, adding a touch of classicism without detracting from the overall modernity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.48 |
| body-sm | 14 | 1.5 | -0.62 |
| body-lg | 16 | 1.5 | 0 |
| subheading | 18 | 1.2 | -0.72 |
| heading-sm | 24 | 1.2 | 0.24 |
| heading | 26 | 1.2 | -1.04 |
| heading-lg | 32 | 1.13 | -1.28 |
| display | 56 | 0.85 | -1.57 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Cookie Consent Modal



### Shop by Category Cards



### Product Card with Badge & CTA



### Primary Navigation Link

**Role:** Top-level navigation items

Text is Graphik 16px weight 400, Midnight Charcoal (#111111). Underlined on hover. No padding or border. Letter spacing is often slightly increased for emphasis.

### Outline CTA Button

**Role:** Secondary calls to action

Background transparent, text Midnight Charcoal (#111111), border 1px solid Midnight Charcoal (#111111). No border radius (0px). Padding varies, e.g., 10px.

### Solid CTA Button

**Role:** Primary calls to action

Background Midnight Charcoal (#111111), text Canvas White (#FFFFFF). No border radius (0px). Padding varies, e.g., 10px.

### Cookie Consent Modal Button - Solid

**Role:** Confirmation or primary actions within modals

Background #000000 (black), text Canvas White (#FFFFFF). Radius 0px. Padding 10px. This button is slightly more opaque than the standard solid CTA.

### Cookie Consent Modal Button - Outline

**Role:** Secondary actions within modals

Background transparent, text #000000 (black), border 1px solid #000000 (black). Radius 0px. Padding 10px.

### Form Input Field

**Role:** User input fields

Background Pale Earth (#f7f4f1), text Midnight Charcoal (#111111), 1px solid Midnight Charcoal (#111111) border. No radius. Padding 24px top, 30px right/left, 6px bottom. Placeholder text is Muted Gray (#6b7280).

### Product Highlight Badge - Light

**Role:** Product features or promotions

Background Canvas White (#FFFFFF), text Midnight Charcoal (#111111). No border radius. Padding 5px. Typically found on product images or listings.

### Product Highlight Badge - Sale

**Role:** Discount indicators

Background transparent, text Faded Red (#d31b3b). No border radius or padding. Used for 'Sale' or discount amounts.

## Do's

- Use Graphik for all primary text, headlines, and navigation. Apply `letterSpacing: -0.0400em` for headings 32px and above for a distinctive, tight feel.
- Maintain a strict achromatic base: Midnight Charcoal (#111111) for foregrounds and Canvas White (#FFFFFF) or Pale Earth (#f7f4f1) for backgrounds.
- Reserve Faded Red (#d31b3b) strictly for sale indicators, badges, or crucial error states, never for general interaction.
- Keep all button, input, and card radii at 0px to maintain a sharp, deliberate aesthetic.
- Employ the Pale Earth (#f7f4f1) background for input fields to create a subtle textural difference within forms.
- Implement the 1px solid Midnight Charcoal border for outline buttons and input fields for high contrast and definition.

## Don'ts

- Do not introduce new primary colors; maintain the brand's subdued, achromatic palette with limited accent colors.
- Avoid soft shadows or gradients; elevation is achieved through distinct color blocking and borders, not subtle shading.
- Do not round corners on any major UI elements (buttons, cards, inputs); the design relies on sharp, clean edges.
- Do not vary font families excessively; Graphik is the workhorse, with Lyon Display as a subtle counterpoint for specific text blocks.
- Avoid generic icon libraries; maintain the simple, outlined icon style seen throughout the system.
- Do not use overly expressive or decorative typography; readability and precision are paramount.

## Layout

The site uses a contained width layout, primarily centered, with a `pageMaxWidth` of approximately 1200px. The hero section often features a full-width image with text overlaid, creating an immersive initial impression. Content sections generally alternate between large imagery and descriptive text, often in horizontal pairs or grids. Clear vertical section gaps (e.g., 48px) create breathable rhythm between content blocks. Navigation is a prominent top bar, sticky on scroll, with a clean and clear structure. The overall impression is one of spaciousness and deliberate content presentation.

## Imagery

Photography is product-focused and lifestyle-oriented, showcasing travel items in aspirational, muted environments (e.g., luggage by a dock, backpacks in natural settings). Images are typically full-bleed or large-format product shots with a natural, slightly desaturated color treatment, emphasizing the product's design and utility within a broader, sophisticated travel narrative. There's a clear emphasis on the product's visual appeal and integration into a stylish, curated experience rather than raw, vivid imagery. Icons are minimal, subtle, and outlined, primarily serving functional purposes within the UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Rimowa | Shares a focus on luxury travel goods with a minimalist, product-centric aesthetic and a sophisticated, subdued color palette. |
| Everlane | Exhibits a similar clean, direct e-commerce design with a strong emphasis on typography, photography of products, and an achromatic base. |
| Monocle | A content-driven site with a similar appreciation for custom sans-serif typography, precise layouts, and a curated, high-quality visual presentation. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #111111 (Midnight Charcoal)
- Background: #FFFFFF (Canvas White)
- CTA (Solid): #111111 (Midnight Charcoal)
- Border: #e5e7eb (Border Fog)
- Accent (Sale): #d31b3b (Faded Red)

### Example Component Prompts
1. Create a `Primary Navigation Link`: text 'LUGGAGE', Graphik font, 16px weight 400, #111111. It should have a slightly increased letter spacing of 0.05em (0.8px at 16px) and no border or padding.
2. Create an `Outline CTA Button` with the text 'SHOP NOW', Graphik font, 16px weight 400, text color #111111. It should have a transparent background and a 1px solid #111111 border, with 0px border-radius and 10px padding all around.
3. Create an `Input Field` for email subscription. Placeholder text 'Enter your email', Muted Gray (#6b7280). Input field background #f7f4f1 (Pale Earth), text #111111 (Midnight Charcoal), with a 1px solid #111111 border. No border-radius, padding 24px top, 30px right, 6px bottom, 30px left.
4. Create a `Product Highlight Badge - Sale` on a product image. Text 'SALE', Graphik font, 12px weight 500, Faded Red (#d31b3b). Background transparent, no padding, no border-radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924510994-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924510994-thumb.jpg |
