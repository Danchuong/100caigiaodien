# mmm.page — Refero Style

- Refero URL: https://styles.refero.design/style/e6a3facd-791c-4cc6-868d-2c6382d3cb0a
- Site URL: https://mmm.page
- ID: e6a3facd-791c-4cc6-868d-2c6382d3cb0a
- Theme: light
- Industry: design
- Created: 2026-04-30T03:42:54.567Z
- Ranks: newest: 87, popular: 451, trending: 290

> Digital collage playground

## Description

mmm.page employs a playful, collage-like aesthetic with a canvas of crisp white and an array of contrasting, vibrant colors for interactive elements. Typography mixes expressive display fonts with legible sans-serifs, contributing to an eccentric yet functional feel. Components are lightweight with subtle shadows, and interactions are punctuated by bold, often contrasting, accent colors. The overall impression is one of creative freedom and approachability, eschewing rigidity for spontaneous charm.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Ink Black | #000000 | neutral | Primary text, major headings, borders, and some navigation backgrounds. Establishes strong contrast against white |
| Stone Gray | #c1c1c5 | neutral | Light surface backgrounds, borders on subtle elements, card backgrounds, and button borders |
| Faint Line Gray | #d6d6d6 | neutral | Subtle borders and dividers, enhancing visual separation without harshness |
| Subtle Text Gray | #6f6f6f | neutral | Secondary text, descriptive paragraphs, and decorative text elements, providing readability without overpowering headings |
| Mid Text Gray | #666666 | neutral | Paragraph text and informational content, darker than subtle for improved legibility |
| Dark Text Gray | #373c3b | neutral | Body text and list items, offering high contrast against light backgrounds |
| Primary Purple | #7012e2 | brand | Violet wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Vibrant Green | #72dd95 | brand | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Warm Accent Orange | #925f52 | accent | Call-to-action button backgrounds when needing a warmer, inviting tone |
| Fresh Accent Green | #12e2b0 | accent | Green action color for filled buttons, selected navigation states, and focused conversion moments. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NationalPark-Variable | system-ui, sans-serif | 400, 600, 700, 900 | 12px, 14px, 15px, 16px, 17px, 20px, 25px | 1.00, 1.20, 1.25 | Primary UI font for buttons, body text, icons, navigation, and list items. Its variable nature allows for a range of expressive weights while maintaining legibility across small text to prominent labels. |
| Lato | sans-serif | 400, 700 | 28px, 32px, 44px, 48px | 1.25, 2.94 | Used for a range of smaller headings and subheadings, providing a clean, modern contrast to the more decorative display fonts. |
| Playfair Display | serif | 400 | 58px, 195px | 1.25 | A prominent display serif font reserved for large, impactful headlines, conveying a sophisticated and editorial feel. The extremely large 195px size is a unique brand statement, suggesting a bold, artistic identity. |
| Calistoga | cursive | 400 | 106px | 1.00 | Used for large, decorative headings, providing a distinct, hand-crafted, and artisanal character. This is a signature brand choice, differentiating text with a unique visual texture. |
| Times New Roman | serif | 400 | 32px | 1.25 | A classic serif font used sparingly, likely for specific thematic headings to evoke a traditional or established aesthetic. |
| Patrick Hand SC | cursive | 400 | 32px | 1.00 | A hand-drawn style font utilized for whimsical or personal headings, reinforcing the playful, customizable nature of the brand. Its casual appearance counterbalances other more formal or structured typography. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1 | 0.094 |
| body-sm | 14 | 1 | 0.094 |
| body-lg | 17 | 1 | 0.094 |
| subheading | 20 | 1 | 0.094 |
| heading-sm | 28 | 1.25 | 0 |
| heading | 32 | 1.25 | 0 |
| heading-lg | 44 | 1.25 | 0 |
| display | 58 | 1.25 | 0 |
| display-lg | 106 | 1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "buttons": "8px",
    "navItems": "8px",
    "largeElements": "19px",
    "smallElements": "1px"
  },
  "elementGap": "16px",
  "sectionGap": "40px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Tab Button

**Role:** Pill-shaped header navigation item

Has a background of rgba(0,0,0,0) with white text, and a border radius of 15px 8px 8px 15px or 8px 15px 15px 8px, suggesting a playful, asymmetrical pill shape for navigation. Padding is minimal to keep the button compact.

### Ghost Header Button

**Role:** Minimal header action button

Features rgba(0,0,0,0) background, white text and a rounded 8px radius. Used for 'Login' and 'Sign Up' in the header, indicating secondary importance.

### Text Outline Button

**Role:** Subtle call to action or secondary action button

Uses a transparent background with black text and a charcoal border of rgba(0, 0, 0, 0.24). Has a 5px border radius, providing a slightly more defined boundary than ghost buttons. Padding is 0px 8px 0px 8px.

### Filled Primary Action Button

**Role:** Main call to action button

Background can be Primary Purple (#7012e2) or Warm Accent Orange (#925f52). Has a 6px border radius, white text, and horizontal padding of 27.0912px, creating a prominent, clickable area.

### Filled Secondary Action Button

**Role:** Alternative call to action button

Background can be Vibrant Green (#72dd95) or Fresh Accent Green (#12e2b0). Has a 6px border radius, white text, and horizontal padding of 27.0912px, offering a distinct but equally prominent option.

### Elevated Content Card

**Role:** Displays grouped content with subtle visual separation

Background is Stone Gray (#c1c1c5), with a subtle shadow of rgba(0, 0, 0, 0.08) 1px 1px 3px 0px. Features an 8px border radius and 14px padding on all sides, creating a soft, elevated container.

### Flat Color Card

**Role:** Used for showcasing features or highly visual content

Can have a background of Primary Purple (#7012e2), Vibrant Green (#72dd95), or a muted blue (#7289da). Features a 6px border radius and no shadow, creating a flat, colorful block.

### Floating Edit Button

**Role:** Persistent action button for direct interaction

A square button with a Fresh Accent Green (#12e2b0) background and a 6px border radius. Contains white text and padding to center the 'Edit' label, often found affixed in a corner for quick access.

## Do's

- Prioritize Canvas White (#ffffff) for dominant backgrounds to maintain a clean, open feel.
- Use Ink Black (#000000) for primary text and significant borders to ensure high contrast and readability.
- Apply Primary Purple (#7012e2) or Vibrant Green (#72dd95) for primary filled button backgrounds to create visual pop and clear calls to action.
- Set the border-radius to 8px for most interactive elements like buttons and cards to ensure a consistent, friendly softness.
- Employ NationalPark-Variable for all body text and UI elements, leveraging its varied weights for hierarchy.
- Reserve Playfair Display and Calistoga for impactful headlines and display text, embracing their distinctive character.
- Use 14px for internal card padding and 16px as a general element gap to create comfortable density in layouts.

## Don'ts

- Avoid using more than two distinct chromatic brand colors per section to prevent visual clutter; focus on one primary and one secondary.
- Do not use dark backgrounds for large content blocks unless it's a specific, controlled section that needs strong visual separation.
- Never compromise text legibility by placing light text on similarly light backgrounds; always refer to contrast ratios.
- Do not deviate from the specified border-radius values for buttons and cards; inconsistency undermines the system's playful yet refined feel.
- Do not overuse the decorative display fonts; they are intended for impact and should be balanced with more legible sans-serifs.
- Avoid arbitrary custom spacing values; adhere to the 16px element gap and 14px card padding for consistency.
- Do not apply heavy or multiple shadows; the design uses subtle elevation to maintain a lightweight aesthetic.

## Layout

The page uses a full-bleed layout for the background, but content within is primarily centered within an implicit container. The hero pattern features a large, centered headline (`Calistoga` or `Playfair Display`) over a white background, flanked by abstract 3D shapes. Section rhythm exhibits consistent vertical spacing (sectionGap 40px) between content blocks, without strong visual dividers or alternating background bands. Content arranges in centered stacks for headlines and CTAs, with implied two-column layouts for descriptive text (though not explicitly clear in the data). Navigation is a sticky top bar with ghost/pill buttons on a black background, and a left-aligned sidebar containing minimal icons on a light background. The density is relatively spacious, allowing individual elements and typography to breathe.

## Imagery

The imagery aesthetic is characterized by abstract 3D geometric shapes and organic, playful forms rendered in white or light gray, scattered across the white canvas. These elements act as decorative atmosphere rather than conveying specific content. Photography is absent, and illustrations are minimal, like the brushstroke under the logo. Icons are outlined, simple, and monochrome, often in Ink Black, reinforcing the clean UI. The overall density is text-dominant, allowing the few graphic elements to stand out as charming accents.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Content Card | rgba(0, 0, 0, 0.08) 1px 1px 3px 0px |
| Hover/Focus State Button | rgba(255, 255, 255, 0.32) 0px 0px 0px 1px |

## Similar Brands

| Business | Why |
| --- | --- |
| Remix | Shares a playful, developer-friendly aesthetic with vibrant accent colors on mostly white or gray backgrounds. |
| Figma | Combines expressive typography with compact UI components and a clean, spacious white canvas for its design interface. |
| ClickUp | Uses bright, contrasting accent colors against a clean UI with rounded corners and a mix of formal and casual typography. |
| Carrd | Focused on simple website creation with an emphasis on distinct visual styles, often incorporating unique typography and color pairings. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #c1c1c5
accent: #7012e2
primary action: #12e2b0 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #12e2b0 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create an elevated content card containing a brief description: Stone Gray (#c1c1c5) background, 8px border-radius, 14px padding, and a subtle shadow (rgba(0, 0, 0, 0.08) 1px 1px 3px 0px). Use Dark Text Gray (#373c3b) for body text at 16px size, NationalPark-Variable, weight 400, line-height 1.0, 0.0940em letter-spacing.
3. Create a descriptive heading: 'Dead simple, drag & drop websites for anything'. Use Lato, weight 400, size 44px, line-height 1.25, normal letter spacing, and Ink Black (#000000) color.
4. Create a hero section with a brand headline: Calistoga, weight 400, size 106px, line-height 1.0, normal letter spacing, Ink Black (#000000) color. Place it on a Canvas White (#ffffff) background, surrounded by subtle abstract geometric shapes.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520544929-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520544929-thumb.jpg |
