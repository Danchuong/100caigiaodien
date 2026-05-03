# AATHER — Refero Style

- Refero URL: https://styles.refero.design/style/3b080dc3-1992-43fe-91d6-2a721f934435
- Site URL: https://aather.com
- ID: 3b080dc3-1992-43fe-91d6-2a721f934435
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T01:55:47.477Z
- Ranks: newest: 487, popular: 238, trending: 166

> Whispered luxury on white linen. A visual system that emphasizes premium product through a muted, spacious, high-contrast, text-dominant interface.

## Description

AATHER employs a refined, subdued aesthetic, prioritizing high-quality product photography over bold UI. The design uses nearly achromatic colors, with deep charcoal text on pristine white or nuanced off-white backgrounds, creating a sense of understated luxury. Typography leans towards delicate, thin weights, establishing a gentle, sophisticated voice. Components are minimal, often borderless or with subtle hairline outlines, ensuring the UI fades into the background, allowing content to take center stage.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Inkwell | #000000 | neutral | Primary text, navigation links, button text, subtle borders, and line elements — establishes a stark, high-contrast presence |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, and text fields — provides a clean, expansive canvas |
| Ghost Gray | #e8e8e8 | neutral | Subtle borders and dividers, indicating soft separation without harsh lines |
| Ash Gray | #808080 | neutral | Muted secondary text, informational tooltips, and ghost button borders — provides a softer alternative to Inkwell |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gestura Text Extra Light |  | 100, 200 | 14px, 16px, 20px | 1.22, 1.35, 1.38 | Gestura Text Extra Light — detected in extracted data but not described by AI |
| Gestura Text | Montserrat, Raleway Thin | 100, 200 | 14px, 16px, 20px, 35px | 1.20, 1.22, 1.35, 1.38 | Headlines and display text where a delicate and refined presence is desired. The extra light and thin weights signify understated luxury, particularly for titles up to 35px. |
| Untitled Sans | Inter, Lato | 100, 200, 400 | 9px, 11px, 12px, 13px, 14px, 16px, 18px, 20px, 24px | 0.78, 1.17, 1.20, 1.22, 1.35, 1.38, 1.39 | Functional text: navigation, body copy, input fields, and smaller headings. The light and regular weights balance readability with a sophisticated, contemporary feel, enhanced by subtle letter-spacing for improved clarity. |
| Gestura Text Light |  | 200 | 16px | 1.38 | Gestura Text Light — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.35 |  |
| body-sm | 16 | 1.35 |  |
| body | 20 | 1.35 |  |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "2px",
    "buttons": "2px"
  },
  "elementGap": "10px",
  "sectionGap": "25px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Navigation links and secondary actions

Textual button with Inkwell for text. No background, no padding or border by default. Active/hover states reveal thin Inkwell underline or Ash Gray border.

### Outlined Button

**Role:** Call to action with minimal visual weight

Background transparent, border 1px solid Inkwell, text color Inkwell. 2px border radius. Padding varies by context but minimal.

### Secondary Outlined Button

**Role:** Subtle interactive elements

Background transparent, border 1px solid Ash Gray, text color Ash Gray. 2px border radius. Used for 'Subscribe' and similar prompts.

### Product Card

**Role:** Display individual products within a grid

Background Paper White, no border, no shadow, no padding. Product image is dominant. Text (Inkwell) and price (Ash Gray if not Inkwell) are left-aligned below the image. No visible border radius.

### Text Input Field

**Role:** Forms and data entry

Background Paper White, border 1px solid Inkwell when focused (hinted by --color-border-form), default border 1px solid Ghost Gray. 2px border radius, with bottom right being 0px. Text color Inkwell.

### Top Navigation Link

**Role:** Primary site navigation in header

Inkwell text using Untitled Sans Light, 14px size, a thin Inkwell underline on hover/active. No background, minimal padding.

## Do's

- Prioritize product photography as the focal point, ensuring it is clean, well-lit, and isolated, often on neutral backdrops.
- Use Gestura Text Extra Light and Thin for headings and display text, embracing its delicate nature at 35px for prominent statements.
- Apply Untitled Sans for all functional UI text (body, navigation, buttons, forms), varying weights from 100 to 400, for clarity and sophistication.
- Maintain a high-contrast palette with Inkwell (#000000) for text and Paper White (#ffffff) for backgrounds, with Ash Gray (#808080) for secondary information.
- Keep components visually lightweight: prefer ghost buttons, thin borders (1px Inkwell or Ash Gray), and absent shadows to ensure content dominance.
- Use a base unit of 4px for all spacing decisions, particularly for minimal element gaps like 10px and section separators around 25px.
- Employ a subtle 2px border radius specifically for interactive elements like buttons and input fields to offer a soft, modern touch without being overly rounded.

## Don'ts

- Avoid using bold or heavy typography for headlines; the Brand's voice relies on lightness and restraint.
- Do not introduce strong accent colors or vivid hues; the palette is strictly achromatic and relies on subtle shifts in gray.
- Steer clear of pronounced shadows or heavy elevation styles; the design emphasizes flatness and a light, airy feel.
- Do not add excessive padding or prominent borders to cards; these should blend into the background as content containers.
- Do not use highly rounded corners (e.g., 8px or more); the maximum radius is 2px for specific interactive elements.
- Avoid busy or dense layouts; spaciousness is key to presenting products and content with an upscale feel.
- Do not use system-default link underlines or colors; all interactive text should follow the Inkwell color and subtle underline pattern.

## Layout

The page adheres to a full-bleed layout for hero sections, showcasing large product photography that spans the viewport width. Content sections below often follow a contained, centered structure with a consistent vertical rhythm of around 25px section gaps. Text and image arrangements vary but frequently present large, singular images followed by centered typographic statements. A flexible grid for product listings (implied by multiple product cards) maintains visual order. Navigation is a minimal top bar with 'Menu' and 'Shop' links, along with a 'Brand Name' (AATHER) centrally placed.

## Imagery

Imagery is almost exclusively high-key, product-focused photography. Products (like candles) are often isolated or tightly cropped, presented on neutral, often light beige or white backgrounds. When hands are present, they are part of a clean, minimalist composition. There are no illustrations or abstract graphics. Icons are minimal, outlined, and monochromatic (Inkwell). The imagery's role is primarily to showcase the physical product as hero, with a very high density relative to the UI, filling large sections of the screen.

## Similar Brands

| Business | Why |
| --- | --- |
| Aesop | Shares a monochromatic color scheme, minimalist typography (often light weights), and an emphasis on high-quality product photography over intricate UI. |
| Byredo | Exhibits a similar luxury ecommerce aesthetic with large product imagery, clean layouts, and a subdued, text-heavy approach for branding. |
| Le Labo | Comparable in its use of a neutral palette, sparse typography, and a content-forward design that makes the product image the hero. |
| Frama | Employs an achromatic system, subtle design elements, and a focus on product purity through photography, rather than bright UI accouterments. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
  text: #000000
  background: #ffffff
  border: #000000
  accent: no distinct accent color
  primary action: no distinct CTA color

Example Component Prompts:
  Create a primary headline for a hero section: 'Light a candle to match the mood.' using Gestura Text, 35px, weight 200, color #000000.
  Design a full-width image banner with a centered text overlay. The overlay text reads 'Shop Candles', rendered in Untitled Sans Light, 14px, #000000, with a thin #000000 underline when active.
  Build a product card: a large featured image, 0px border radius, no padding, with 'Cabin in the Forest' text underneath, 16px, Untitled Sans Light, #000000.
  Generate a text input field for an email address: 14px Untitled Sans Light, 2px border radius, border 1px solid #000000. Placeholder text 'Your Email'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514128258-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514128258-thumb.jpg |
