# Flying Papers — Refero Style

- Refero URL: https://styles.refero.design/style/7d254296-6817-487a-a58c-4d5eca89cbf3
- Site URL: https://www.flyingpapers.com
- ID: 7d254296-6817-487a-a58c-4d5eca89cbf3
- Theme: light
- Industry: other
- Created: 2026-04-30T01:22:23.759Z
- Ranks: newest: 619, popular: 614, trending: 427

> Punchy Pulp Comic

## Description

Flying Papers uses a vibrant, playful visual language with high-contrast color pairings and bold, expressive typography. The design emphasizes chunky, outlined elements and a distinct personality, favoring blocky shapes and thick borders over subtle gradients or shadows. Color is used to define graphic blocks and highlight key information, rather than for deep hierarchy or functional states. The overall impression is energetic and almost cartoonish.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Grape Soda | #8584bd | brand | Page background, large hero sections |
| Lemon Drop | #f4ed36 | brand | Yellow accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |
| Warm Dough | #f9cc73 | brand | Secondary brand accent for text, outlined elements, and some card elements |
| Deep Plum | #61609a | brand | Card backgrounds, creating visual breaks from the main Grape Soda background |
| Rose Blush | #f8c1ba | accent | Muted accent for borders and text, offering a softer alternative to the main brand colors |
| Sage Clay | #b5c995 | accent | Muted accent for borders and text, providing a natural tone amidst the more vivid brand colors |
| Forest Floor | #375027 | brand | Footer background, providing a grounding, darker tone |
| Orchid Bloom | #ac4f98 | brand | Specific card backgrounds, adding variety to the color palette for content blocks |
| Crimson Pop | #c94245 | brand | Specific card backgrounds, puncturing the palette with a bold red |
| Licorice Stick | #000000 | neutral | Primary text, borders, and icon fills |
| Whipped Cream | #f9f5f2 | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Deep Charcoal | #1a1a1a | neutral | Muted text, some borders, and secondary backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ObviouslyVariable |  | 800, 900 | 18px, 20px, 30px, 100px, 113px, 130px, 133px, 149px, 184px, 241px, 244px, 341px | 0.80, 0.90, 1.00 | Primary display and heading font. Its heavy weights and wide letter-spacing create a bold, impactful, and almost stamped visual style. |
| DegularVariable |  | 400 | 10px | 1.00 | Body text and functional labels, providing a clean, legible contrast to the expressive headings. |
| DegularDisplay-Bold |  | 700 | 16px | 1.00 | Subheadings and emphasized text, offering a slightly more pronounced weight and tracking than regular body text. |
| bergen_monoregular | Space Mono | 400, 600 | 12px, 14px | 0.80, 1.00 | Navigation and utility text, contributing a technical, legible feel with its monospaced origin. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| body | 14 | 0.8 |  |
| heading | 18 | 1 | 0.36 |
| heading-lg | 20 | 1 | 0.4 |
| display-sm | 30 | 0.9 | 0.6 |
| display-md | 100 | 0.8 | 2 |
| display | 341 | 0.8 | 6.82 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "buttons": "0px",
    "elements": "6px",
    "roundElements": "100px"
  },
  "elementGap": "17px",
  "sectionGap": "40px",
  "cardPadding": "17px",
  "pageMaxWidth": null
}
```

## Components

### Primary Outlined Button

**Role:** Main call-to-action button.

Transparent background with a 3px Lemon Drop (#f4ed36) border, 0px border-radius, and Licorice Stick (#000000) text. Padding is implied by text size as 0px from raw data.

### Secondary Outlined Button (Neutral)

**Role:** Secondary action or ghost button.

Transparent background with a 3px Licorice Stick (#000000) border, 0px border-radius, and Licorice Stick (#000000) text. Padding is implied by text size as 0px from raw data.

### Text Link (Light)

**Role:** Interactive text link on dark backgrounds.

Transparent background with no border, Whipped Cream (#f9f5f2) text. Padding is implied by text size as 0px from raw data.

### Text Link (Dark)

**Role:** Interactive text link on light backgrounds.

Transparent background with no border, Licorice Stick (#000000) text. Padding is implied by text size as 0px from raw data.

### Neutral Card

**Role:** Basic content container.

Transparent background, 6px border-radius, no shadow, with 17px padding on all sides. Primarily houses content without a distinct background color.

### Deep Plum Card

**Role:** Prominent content card with brand color background.

Solid Deep Plum (#61609a) background, 6px border-radius, no shadow, with 17px padding on all sides.

### Orchid Bloom Card

**Role:** Accent content card to provide visual variation.

Solid Orchid Bloom (#ac4f98) background, 6px border-radius, no shadow, with 17px padding on all sides.

### Crimson Pop Card

**Role:** Highlight content card for emphasis.

Solid Crimson Pop (#c94245) background, 6px border-radius, no shadow, with 17px padding on all sides.

## Do's

- Use Grape Soda (#8584bd) as the default background for full-page sections to uphold the brand's energetic foundation.
- Apply Lemon Drop (#f4ed36) exclusively for high-impact headlines and outlined calls-to-action, balancing its vividness with the background.
- Utilize ObviouslyVariable Bold for all headlines, employing letter-spacing 0.02em and scaling sizes to achieve visual dominance.
- Always apply a 3px solid border to interactive elements, preferring Lemon Drop (#f4ed36) for primary actions and Licorice Stick (#000000) for secondary options.
- Ensure all card elements have a border-radius of 6px, providing a subtle softness against otherwise sharp edges.
- Employ Licorice Stick (#000000) as the primary text color on light backgrounds and Lemon Drop (#f4ed36) or Whipped Cream (#f9f5f2) on dark backgrounds for accessibility.
- Maintain a default element gap of 17px and card padding of 17px for consistent visual breathing room within components.

## Don'ts

- Do not use generic system shadows or subtle gradients; the design relies on flat blocks and sharp contrasts for its personality.
- Avoid solid filled buttons for primary actions; prioritize the outlined button style with a 3px border in brand colors.
- Do not introduce new typefaces; restrict typography to ObviouslyVariable, DegularVariable, and bergen_monoregular as specified.
- Do not use neutral colors as primary accents; color should always convey energy and brand personality.
- Do not vary card radii; all cards should consistently use a 6px border-radius.
- Avoid dense, information-heavy layouts; sections should breathe with ample vertical and horizontal spacing.
- Do not use subtle color variations for hierarchy; use distinct chromatic colors or strong achromatic contrast for clear differentiation.

## Layout

The page employs a full-bleed layout for its main sections, with content often centered or using large, blocky elements. The hero section is dominated by a large, centered headline and a graphic element against a full-width brand background. Subsequent sections follow a consistent vertical rhythm, often featuring alternating background colors. Content is typically arranged in clear, stacked blocks or occasionally in two-column layouts. The presence of card variants suggests a grid-like arrangement for some content blocks, breaking up the full-width flow. Navigation is generally a minimal top bar, suggesting an informal approach, and the footer is clearly defined with a distinct background.

## Imagery

The site's imagery focuses on an almost cartoonish, often abstract, and slightly mischievous aesthetic. This is exemplified by the peering character on the hero screen. There's a strong preference for icons over photography and a visual language that feels illustrative and graphic, almost like a bold sticker or comic book art. Graphics are typically filled, not outlined, and utilize the brand's vivid color palette. They serve a decorative and brand-reinforcing role rather than providing literal product showcases or realistic context. Imagery density is moderate, with key graphics acting as focal points.

## Similar Brands

| Business | Why |
| --- | --- |
| Brainpop | Shares a vibrant, cartoonish aesthetic with high-contrast colors and bold, graphic elements. |
| Mailchimp (old branding) | Exhibits a playful tone with distinctive, bold typography and a limited but impactful color palette for brand identity. |
| Bravado | Utilizes a highly stylized, illustrative approach with strong typography and a focus on unique visual assets. |
| Liquid Death | Employs an edgy, graphic-heavy style with strong, singular color accents and prominent typography. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
- text: #000000
- background: #8584bd
- border: #000000
- accent: #2d8ebc
- primary action: #f4ed36 (outlined action border)

**3-5 Example Component Prompts**
- Create a hero section: Grape Soda (#8584bd) background, main headline 'HOW OLD ARE YOU?' in Lemon Drop (#f4ed36), ObviouslyVariable Bold 341px, letter-spacing 6.82px. Include a Secondary Outlined Button with 'I'M OVER 18, LET ME IN' text in Licorice Stick (#000000), 3px #000000 border, no radius, 0px padding. Below it, a Text Link (Light) saying 'I'M NOT OVER 18 YET' in Whipped Cream (#f9f5f2).
- Create a Deep Plum Card: Deep Plum (#61609a) background, 6px radius, 17px padding. Inside, 'Product Title' in Licorice Stick (#000000) (ObviouslyVariable 30px, letter-spacing 0.6px) and 'Short description of product' in body text style Licorice Stick (#000000) (DegularVariable 10px).
- Create a footer section: Forest Floor (#375027) background, with navigation links 'Shop', 'About us' styled as Text Link (Light) in Whipped Cream (#f9f5f2), bergen_monoregular 12px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512122392-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512122392-thumb.jpg |
