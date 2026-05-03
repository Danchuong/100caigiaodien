# Nike.com — Refero Style

- Refero URL: https://styles.refero.design/style/d7ace114-0548-41f5-a2ff-2afbf32be94d
- Site URL: https://nike.com
- ID: d7ace114-0548-41f5-a2ff-2afbf32be94d
- Theme: light
- Industry: ecommerce
- Created: 2026-04-13T13:03:53.000Z
- Ranks: newest: 918, popular: 356, trending: 342

> High-contrast arena with athletic curves.

## Description

Nike.com evokes a sharp, performance-driven aesthetic, grounded in a highly contrasting black-and-white palette. The dominant use of stark black typography against pristine white surfaces creates an immediate sense of clarity and authority, amplified by a compact spacing system that keeps elements close-knit. Key elements like primary buttons and navigation items feature generous 30px radii, introducing a subtle softness that contrasts with the otherwise angular, direct visual language, hinting at the athletic curves of their products.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pitch Black | #111111 | neutral | Primary text, headings, outlines, icons, primary brand color. Establishes strong contrast and a sense of luxury. |
| Cloud White | #ffffff | neutral | Page backgrounds, card surfaces, primary button background, prominent UI elements. Provides a clean, expansive canvas. |
| Alloy Gray | #e5e5e5 | neutral | Subtle background for secondary sections and borders. Offers a slight textural shift from pure white. |
| Feather Gray | #f5f5f5 | neutral | Background for subtle accents like navigation hovers or specific button states. A very light, almost imperceptible shift from white. |
| Steel Gray | #707072 | neutral | Secondary text, muted links, subtle icons, inactive states. Provides hierarchy without being too light. |
| Pewter Gray | #9e9ea0 | neutral | Placeholder text, disabled states, decorative strokes. The lightest functional gray. |
| Ignite Red | #EE0005 | brand | Accent for urgent notifications or strong calls to action (though not prominently used in provided data, implied by token `--podium-cds-color-red-500`). |
| Blaze Orange | #FF5000 | brand | Accent for highlighting special offers or secondary calls to action (though not prominently used in provided data, implied by token `--podium-cds-color-orange-400`). |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica Now Text | Arial, Helvetica, sans-serif | 400, 500 | 16px, 20px | 1.50, 1.75 | Primary text, body copy, navigation links, button labels. Weight 500 signals medium emphasis for navigation and smaller headings, while 400 is for general body content. This family is the workhorse of the system, maintaining legibility and a contemporary feel across all textual elements. |
| Helvetica Now Display | Arial, Helvetica, sans-serif | 500 | 20px, 24px | 1.20, 1.50 | Secondary headings and larger button text. Used for smaller display headings, bridging the gap between body text and the largest display font, providing clear hierarchy. |
| Nike Futura ND | Arial, Helvetica, sans-serif | 500 | 76px | 1.00 | Hero headlines. This custom geometric sans-serif, with its powerful 76px size, provides a bold, iconic brand statement at grand scale. Its uniqueness drives brand recognition for major statements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.75 |  |
| body | 16 | 1.75 |  |
| subheading | 20 | 1.5 |  |
| heading | 24 | 1.2 |  |
| display | 76 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "30px",
    "default": "8px",
    "navItems": "30px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to Action

Solid white background with Pitch Black (#111111) text and a 1px Pitch Black (#111111) border. The prominent 30px border-radius makes buttons feel distinct and softer than other UI elements. Padding is 6px vertical, 16px horizontal.

### Ghost Button

**Role:** Secondary Action

Transparent background with Pitch Black (#111111) text. No visible border or padding by default. Used for less prominent actions, blending seamlessly with the background.

### Circular Icon Button

**Role:** Navigation/Utility

White background with Pitch Black (#111111) icon/text. Features a 50% border-radius, creating perfect circles. Used for compact actions like search or favorites in the header.

### Feature Card

**Role:** Content Display

Transparent background, no border-radius. Features a large image, a Pitch Black (#111111) heading, and Steel Gray (#707072) body copy, with Ghost Buttons for action. No visible border or shadow, relying on imagery for visual separation.

### Product Tile

**Role:** Product Listing

Cloud White (#ffffff) background with a 1px Alloy Gray (#e5e5e5) border. No border-radius. Displays product images and Pitch Black (#111111) product names, used in structured grids.

## Do's

- Use Pitch Black (#111111) for all primary text, headings, and outlines to maintain high contrast and sophistication.
- Apply Cloud White (#ffffff) as the primary background for all page sections and card surfaces, ensuring visual spaciousness.
- Ensure primary action buttons feature 30px border-radius with 6px vertical and 16px horizontal padding.
- Implement a compact spacing system using 8px as the primary `elementGap` between UI elements.
- Utilize Nike Futura ND (or Arial as substitute) at 76px size and 1.0 lineHeight for all hero headlines to convey brand power.
- Divide content using subtle background shifts to Alloy Gray (#e5e5e5) for secondary sections instead of heavy borders or shadows.

## Don'ts

- Avoid using drop shadows or heavy box shadows, as the system relies on background color shifts and borders for depth.
- Do not deviate from the monochrome palette for functional UI elements; save branded colors for marketing accents only.
- Do not use generic system fonts when custom fonts like Helvetica Now Text/Display or Nike Futura ND are specified, as they are crucial for brand identity.
- Disregard the 30px radius for buttons and nav items except for specific utility components like circular buttons.
- Do not introduce large gaps or excessive padding; the design favors a compact, information-dense layout.
- Avoid using multiple bright, saturated colors for primary UI elements; reserve these for specific brand highlights or imagery if necessary.

## Layout

The layout primarily uses a max-width contained grid for most content, though the hero section often leverages full-bleed imagery. The header is sticky and provides a minimal but clear global navigation. Sections alternate between prominent full-width visual statements (like the hero shoe image) and structured content blocks. Content arrangement frequently uses two-column or four-column card grids for features and product listings. Vertical spacing between logical sections appears consistent, creating a rhythmic flow down the page. The overall density is compact, ensuring visual information is readily available without excessive scrolling.

## Imagery

The visual language is characterized by high-quality product photography, often shot with dramatic lighting against dark, sometimes black, backgrounds for hero sections, and on pristine white or simple colored backgrounds for product listings. When not product-focused, imagery features crisp action shots of athletes. Images are typically contained within rectangular frames with sharp edges or within grid structures, with no noticeable masking or complex overlapping. Icons are monochrome, often Pitch Black (#111111) on white, thin-stroked, and functional.

## Similar Brands

| Business | Why |
| --- | --- |
| Adidas | Both brands in the athletic apparel industry use high-contrast photography of products/athletes against neutral backgrounds, focusing on product dynamism. |
| Apple | Shares a use of strong black and white contrast, minimal UI elements, high-quality product photography, and a sophisticated, modern typography choice for brand recognition. |
| lululemon | Similar approach to high-quality product photography and clean, minimal layouts with ample negative space to highlight products. |
| Under Armour | Focus on performance, often reflected in high-contrast product-centric layouts and bold typography, albeit with a slightly rougher edge than Nike. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #111111 (Pitch Black)
- Background (Primary): #ffffff (Cloud White)
- Call to Action (Background): #ffffff (Cloud White)
- Call to Action (Text): #111111 (Pitch Black)
- Border (Default): #111111 (Pitch Black)
- Secondary Text: #707072 (Steel Gray)

### 3-5 Example Component Prompts
1. **Create a Hero Section:** Full-width hero section with a centered image. Overlay 'POTENCIA TOTAL' as a `display` heading in Pitch Black (#111111), followed by 'Siente la potencia de la unidad Air Zoom curvada completa. Da el máximo.' as `body` text in Pitch Black (#111111). Below a 'Comprar' (Primary Filled) button: background Cloud White (#ffffff), text Pitch Black (#111111), border Pitch Black (#111111), 30px radius, 6px 16px padding.
2. **Generate a Product Grid Card:** A card with a Cloud White (#ffffff) background, 0px radius, and a 1px Alloy Gray (#e5e5e5) border. Include a product image. Below the image, display 'Nike United' as `body` text weight 500 in Pitch Black (#111111). Follow with 'Creadas por atletas. Diseñadas para destacar.' as `body` text weight 400 in Steel Gray (#707072). Include two Ghost Buttons ('Comprar todo' and 'Comprar para niño/a') with Pitch Black (#111111) text, no background or border.
3. **Design a Global Navigation Item:** Use 'Novedad' as `body` text weight 500 in Pitch Black (#111111). On hover, background should be Feather Gray (#f5f5f5).
4. **Create a Footer Link:** Display 'Zapatillas de running en negro' as `body` text weight 400, color Steel Gray (#707072). There should be no specific background or border, and the component should fit into a list structure with an 8px element gap.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776082048585-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776082048585-thumb.jpg |
