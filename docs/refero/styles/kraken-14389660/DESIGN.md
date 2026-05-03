# Kraken — Refero Style

- Refero URL: https://styles.refero.design/style/14389660-81ff-4ca0-957f-b0dcc8fbe120
- Site URL: https://kraken.com
- ID: 14389660-81ff-4ca0-957f-b0dcc8fbe120
- Theme: light
- Industry: crypto
- Created: 2026-02-05T16:26:49.000Z
- Ranks: newest: 1227, popular: 293, trending: 420

> Regulated purple circuit board. Precise, interconnected components glowing with strategic violet light.

## Description

This design system projects a technically forward and secure image, achieved through a meticulously balanced palette of near-achromatic grays and subtle purple accents. The key visual identity is driven by the custom 'Kraken-Product' and 'Kraken-Brand' fonts, particularly their application with precise, tight letter-spacing for headlines, conveying modern authority. Controlled use of rounded corners (8-12px for cards and buttons, 9999px for small indicators) softens the sharp, data-driven aesthetic without compromising precision, like a high-end electronic device. Strategic use of a vibrant violet (#7132f5) acts as a high-contrast indicator, drawing immediate attention to interactive elements, similar to a status LED on a piece of financial hardware.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #101114 | neutral | Most primary text, high-contrast UI elements, and essential information. |
| Graphite | #686b82 | neutral | Secondary text, subtle borders, and less prominent UI elements; provides a softer contrast. |
| Pure White | #ffffff | neutral | Page backgrounds, card surfaces, and text on dark backgrounds. |
| Whisper Gray | #f6f5f9 | neutral | Secondary section backgrounds, providing a subtle visual separation without strong contrast. |
| Mist | #d4d4dc | neutral | Divider lines and disabled states, offering a very light boundary. |
| Kraken Violet | #7132f5 | brand | Primary brand accent, interactive elements like buttons, navigation highlights, and key icons — signifies action and brand identity. |
| Lavender Mist | #e4dcf9 | brand | Subtle background for active navigation items or accented buttons, creates a softer touchpoint than the solid violet. |
| Success Green | #026b3f | semantic | Indicators for positive status, such as successful transactions or positive price changes. |
| Alert Red | #d11d45 | semantic | Indicators for negative status or warnings, such as error messages or negative price changes. |
| Deep Space Purple | #8453e6 | brand | Background for bold, immersive gradients. Dominant color extracted from the provided CSS gradient for visual consistency. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Kraken-Product | Inter | 400, 500 | 10px, 12px, 14px, 16px | 1.00, 1.33, 1.38, 1.40, 1.43, 1.71 | Body copy, navigation, badges, and smaller UI elements. Its clean, utilitarian nature underpins all informational text. |
| Kraken-Brand | Space Grotesk | 400, 700 | 20px, 24px, 36px, 48px | 1.17, 1.22, 1.33, 1.40 | Headlines and prominent display text. The distinctive tight letter spacing (-0.021em for larger sizes, -0.014em for smaller) is a signature element that makes headings feel precise and modern without being overtly decorative. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.71 |  |
| body | 14 | 1.4 |  |
| body-lg | 16 | 1.38 |  |
| subheading | 20 | 1.4 | -0.42 |
| heading | 24 | 1.33 | -0.34 |
| heading-lg | 36 | 1.22 | -0.76 |
| display | 48 | 1.17 | -1 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "pills": "9999px",
    "badges": "6px",
    "buttons": "8-12px"
  },
  "elementGap": "4-16px",
  "sectionGap": "48px",
  "cardPadding": "12-16px",
  "pageMaxWidth": null
}
```

## Components

### Stat Block



### Crypto Portfolio Tab Selector with Price Rows



### Email Sign Up Form



### Navigation Link - Default

**Role:** Primary navigation links in header

Color: Midnight Ink (#101114), font and weight: Kraken-Product 400, padding: 20px vertical, 10px horizontal. No border, no radius. Interacts with Kraken Violet on hover/active via a bottom border.

### Navigation Link - Ghost Secondary

**Role:** Secondary navigation items within lists or filters

Color: Graphite (#686b82), font and weight: Kraken-Product 500. Padding: 8px vertical, 12px horizontal. Radius: 10px. Transparent background.

### Primary Action Button

**Role:** Key call-to-action buttons

Background color: Kraken Violet (#7132f5), text color: Pure White (#ffffff), Kraken-Product 500, font size 14px. Radius: 8-12px. Padding 12-16px horizontal, 8-10px vertical.

### Accent Tag Button

**Role:** Small interactive tags or filters

Background color: Lavender Mist (#e4dcf9), text color: Kraken Violet (#7132f5), Kraken-Product 500. Radius: 12px. Padding 8px all sides.

### Information Card

**Role:** Displaying informational blocks or articles

Background color: Pure White (#ffffff), border radius: 8px. Box shadow: rgba(0, 0, 0, 0.03) 0px 4px 24px 0px. Padding: 12px vertical, 16px horizontal.

### Success Badge

**Role:** Highlighting positive metrics or status

Background color: rgba(20, 158, 97, 0.16), text color: Success Green (#026b3f), Kraken-Product 400. Border radius: 6px. Padding: 1px vertical, 4px horizontal. Tight structure for showing compact, positive statistics.

### Email Input Field

**Role:** User input for forms

Transparent background, color: Midnight Ink (#101114), Kraken-Product 400. Border color: Mist (#767676). Underlined style with no border radius. Placeholder text is Graphite (#686b82).

## Do's

- Use Kraken Violet (#7132f5) exclusively for primary calls to action, active states, and critical brand accents to maintain its strong signaling power.
- Apply Kraken-Brand font with specific negative letter-spacing for all headlines (e.g., -0.021em at 48px, -0.014em at 24px) to achieve the signature precise, modern feel.
- Maintain a clear visual hierarchy by limiting shadows to Information Cards (rgba(0, 0, 0, 0.03) 0px 4px 24px 0px) and a minimal effect for elevated buttons (rgba(16, 24, 40, 0.04) 0px 1px 4px 0px).
- Employ an 8px border radius for all primary cards and buttons, using 9999px for small pill-shaped labels or indicators to create a consistent soft yet defined component shape.
- Ensure generous internal padding within components using the established spacing tokens (e.g., 12-16px for card padding, 8-12px for button padding) to prevent a cramped feel and promote readability.
- Utilize Whisper Gray (#f6f5f9) for section backgrounds that require subtle separation from Pure White (#ffffff) without creating stark visual breaks.

## Don'ts

- Do not introduce new saturated primary colors; adhere strictly to Kraken Violet as the sole chromatic brand accent.
- Avoid using drop shadows on elements other than specified cards and buttons, as this dilutes the subtle elevation strategy.
- Do not deviate from the defined Kraken-Brand and Kraken-Product font families or their specified weights and letter-spacing for text, as they are central to the brand's typographic identity.
- Do not use highly rounded corners (e.g. 20px, 16px) for cards or primary buttons; maintain the 8-12px range for a consistent, precise aesthetic.
- Never use Pure White (#ffffff) as text on light backgrounds; always ensure sufficient contrast with Midnight Ink (#101114) or Graphite (#686b82) for readability.

## Layout

The site employs a max-width contained layout, typically centered, though the hero section often utilizes a full-bleed background. The hero pattern features a prominent headline and call-to-action on the left, balanced by a large product screenshot (mobile app) on the right. Content sections generally follow a consistent vertical rhythm, often alternating between a main content area and a slightly differentiated background color like Whisper Gray. Featured information and statistics are presented in clear, gridded layouts, such as 3-column card grids for articles or detailed feature lists. Navigation is handled by a sticky top bar, featuring primary links and user actions on the right. The overall density is balanced, allowing breathing room between sections while maintaining a structured, information-dense display.

## Imagery

This design primarily uses abstract, branded illustrations and product screenshots. Illustrations feature geometric forms, often with subtle gradients in brand violet or muted cool tones, and serve decorative or conceptual roles. Product screenshots of the mobile app are rendered on a modern smartphone, demonstrating the UI in context, always in a pristine, 'hero' position. Icons are minimalist and outlined, typically in Midnight Ink or Graphite, occasionally filled in Kraken Violet for active states. Imagery is either full-bleed for impactful hero sections (like the mobile app screenshot) or contained within cards and sections, with soft 8px rounded corners to integrate with the UI. The density is moderate; imagery supports content rather than dominating it, providing visual anchor points in a text-rich layout.

## Elevation

| Element | Style |
| --- | --- |
| Information Card | rgba(0, 0, 0, 0.03) 0px 4px 24px 0px |
| Button/UI Element subtle hover | rgba(16, 24, 40, 0.04) 0px 1px 4px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Coinbase | Shares a professional, modern cryptocurrency platform aesthetic with clean layouts, systematic use of white space, and a measured application of a single vibrant accent color against a neutral palette. |
| Binance | Uses a similar data-dense UI with a focus on clear information presentation, distinctive typography for headlines, and a functional approach to color with a primary brand accent. |
| Revolut | Employs a clean, high-tech financial UI, often pairing subtle gray backgrounds with a distinct brand color to highlight interactive elements and important information. Emphasizes modern, condensed typography. |
| Stripe | Features a very precise, almost 'designed by engineers' aesthetic, with strict typographic scales, carefully controlled color palettes, and an emphasis on functionality over embellishment, similar to Kraken's minimal and exact approach. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #101114 (Midnight Ink)
- Background: #ffffff (Pure White)
- CTA: #7132f5 (Kraken Violet)
- Border: #d4d4dc (Mist)
- Accent: #e4dcf9 (Lavender Mist)

### Example Component Prompts
1. **Create a hero section:** Full-width background with `Whisper Gray (#f6f5f9)`. Left side content: Headline 'Secure and regulated crypto platform in Spain' using `Kraken-Brand, weight 700, size 48px, line-height 1.17, letter-spacing -1.0px, color #101114`. Subtext 'Instant SEPA deposits and withdrawals.' using `Kraken-Product, weight 400, size 16px, line-height 1.38, color #101114`. A primary 'Sign up' button with background `#7132f5`, text `Pure White`, `Kraken-Product 500`, `8px border-radius`, `10px vertical 16px horizontal padding`. Right side: large, contained product screenshot inside a `Mockup Frame`.
2. **Generate an 'Information Card':** Background `Pure White (#ffffff)`, `8px border-radius`, box-shadow `rgba(0, 0, 0, 0.03) 0px 4px 24px 0px`. Inside, include a title 'Kraken Is Officially MiCA Licensed' using `Kraken-Product, weight 500, size 16px, line-height 1.38, color #101114`. Below, a body text '5 min' using `Kraken-Product, weight 400, size 12px, line-height 1.43, color #686b82`. Padding inside the card: `12px vertical, 16px horizontal`.
3. **Design a 'Success Badge':** Background `rgba(20, 158, 97, 0.16)`, text `Success Green (#026b3f)`, `Kraken-Product 400`, `size 10px`, `line-height 1.71`. `Border-radius 6px`. Padding `1px vertical, 4px horizontal`.
4. **Build an 'Email Input Field':** No background color, border is `1px solid #767676` only at the bottom, no `border-radius`. Text input color `Midnight Ink (#101114)`, placeholder color `Graphite (#686b82)`. Font `Kraken-Product 400`, `size 14px`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924218656-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924218656-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/14389660-81ff-4ca0-957f-b0dcc8fbe120-1777561140082-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/14389660-81ff-4ca0-957f-b0dcc8fbe120-1777561140082-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/14389660-81ff-4ca0-957f-b0dcc8fbe120-1777561140082-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/14389660-81ff-4ca0-957f-b0dcc8fbe120-1777561140082-preview-detail-poster.jpg |
