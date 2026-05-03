# Faccia Brutto Spirits — Refero Style

- Refero URL: https://styles.refero.design/style/181a3e89-20cb-400a-8fa4-529acce7ca7d
- Site URL: https://facciabruttospirits.com
- ID: 181a3e89-20cb-400a-8fa4-529acce7ca7d
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:04:58.082Z
- Ranks: newest: 235, popular: 1296, trending: 1310

> Rustic Artisan Distillery – a raw, unfussy aesthetic of dark glass bottles and earthy craft paper

## Description

Faccia Brutto Spirits uses a rustic artisan aesthetic, blending a limited monochromatic palette with earthy tones and a single bold action color. Typography is condensed and authoritative, with strong uppercase headlines. Surfaces are clean and unembellished, relying on subtle textural nuances instead of gradients or heavy shadows. Components emphasize functionality with minimal styling, echoing a handcrafted yet direct approach.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #181313 | neutral | Primary text, headings, dark backgrounds, navigation links, prominent borders |
| Stone Gray | #4c4c4c | neutral | Secondary text, muted borders, subtle button outlines |
| Canvas | #fefefe | neutral | Page backgrounds, card surfaces, ghost button text, light borders |
| Mist | #c5c3c3 | neutral | Background for secondary sections or subtle surface differentiation |
| Ash | #b2b2b2 | neutral | Input borders, subtle shadows |
| Charcoal | #333333 | neutral | Headline text in off-white contexts, focused border states |
| Parchment | #d4d4d4 | neutral | Input field borders |
| Terra Cotta | #e53d22 | brand | Decorative background accents, highlight banners |
| Ocean Blue | #357fbd | brand | Decorative background accents |
| Sage Bloom | #a3a96f | accent | Primary action button background — a gentle, earthy accent |
| Indigo | #2858d5 | accent | Subscription button background in modals — a distinct, authoritative call to action |
| Cream | #dddeba | accent | Secondary action button background, offering a soft, muted alternative |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Ano | Montserrat | 400, 600, 700 | 12px, 15px, 16px, 20px, 24px, 25px, 28px, 30px, 40px, 50px | 1.00, 1.10, 1.15, 1.20, 1.25, 1.40, 1.50, 2.00 | All text elements, including headings, body, links, and buttons. Its condensed nature and varied weights provide a distinct, almost stamped quality to the brand's voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 2 | 0.042 |
| body-sm | 15 | 1.4 | 0.018 |
| subheading | 20 | 1.25 | 0.01 |
| heading-sm | 24 | 1.25 | 0.01 |
| heading | 30 | 1.15 | -0.01 |
| display | 50 | 1 | -0.01 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "16777215px",
    "cards": "8px",
    "inputs": "4px",
    "buttons": "4px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Navigation, secondary actions, and inline links that require minimal visual weight.

Transparent background, Ink text (#181313), with Ink (#181313) border. No border radius. Padding is minimal (0px).

### Primary Action Button

**Role:** Main call to actions, such as 'Start Shopping'.

Background is Sage Bloom (#a3a96f), text is Ink (#181313). Border radius is 0px. Padding is 18px vertical, 20px horizontal.

### Secondary Action Button

**Role:** Alternative or less prominent actions.

Background is Cream (#dddeba), text is Ink (#181313). Border radius is 0px. Padding is 18px vertical, 0px horizontal.

### Subscription Button

**Role:** Specific call to action for subscription forms, like in pop-up modals.

Background is Indigo (#2858d5), text is Canvas (#fefefe). Border radius is 4px. Padding is 14px vertical, 16px horizontal.

### Product Card

**Role:** Displaying individual product items on catalog pages.

Transparent background, no box shadow or border. Padding is 0px. Border radius is 0px.

### Modal Card

**Role:** Pop-up content like subscription forms or notifications.

White background (#fefefe), border radius 8px. Shadow: `rgba(0, 0, 0, 0.3) 0px 10px 40px 0px`. No internal padding specified.

### Pill Input Field

**Role:** Search bars or simple text inputs that need a soft, rounded appearance.

Transparent background, Ink text (#181313), Ash border (#b2b2b2). Rounded with a large radius (16777215px, effectively a pill shape). Padding is 10px vertical, 40px horizontal.

### Standard Input Field

**Role:** General form inputs.

Background is #f9f9f9, text is #4a4a4a (Stone Gray variant). Border is Parchment (#d4d4d4), radius 4px. Padding is 14px vertical, 16px horizontal.

## Do's

- Use Ink (#181313) for all primary text, headings, and most clickable elements to maintain visual depth and contrast.
- Prioritize Ano font at various weights and sizes for all textual content, ensuring consistency in typographic voice.
- Employ Sage Bloom (#a3a96f) exclusively for primary calls to action on product-related pages, conveying a natural, inviting prompt.
- Limit component radii to 0px for most elements, 4px for inputs and specific buttons, and 8px for cards to maintain the crisp, no-frills aesthetic.
- Use a comfortable density with element gaps of 20px and section gaps of 40px to give content breathing room without feeling sparse.
- Apply the single modal shadow `rgba(0, 0, 0, 0.3) 0px 10px 40px 0px` only to modals or overlay cards to provide distinct elevation.
- Implement Canvas (#fefefe) as the primary background for content areas, contrasting with Ink (#181313) text for high readability.

## Don'ts

- Avoid using gradients or complex inner shadows, as the system relies on flat surfaces and subtle material changes.
- Do not introduce new vibrant or saturated colors outside of the defined accent palette; color should be used sparingly for impact.
- Refrain from using heavily rounded corners on primary elements; most components should retain a sharp, unyielding edge.
- Do not deviate from the Ano font family; its specific character is integral to the brand's identity.
- Avoid excessive use of uppercase for body text; reserve it for headlines and specific navigational elements to maintain impact.
- Do not use transparent backgrounds for action buttons unless explicitly defined as a ghost button, to prevent visual ambiguity.
- Never add unnecessary borders or decorative elements that detract from the functional, handcrafted feel.

## Layout

The page primarily uses a full-bleed structure for hero sections and product photography, alternating with content sections that appear to be constrained to an unstated max-width. The hero features large product imagery with centered, strong headlines. Section rhythm is guided by background color changes, such as the terracotta band visible in the screenshot. Content is often presented in centered stacks or simple grid arrangements, with ample vertical spacing between blocks. Navigation is a simple, fixed top bar.

## Imagery

The site uses product photography featuring bottles in either crisp, high-key isolation against white or dark, moody settings for atmosphere. These images are typically full-bleed or large focal points. Graphics are predominantly typographical, using the Ano font for strong, brand-reinforcing statements. Icons, when present, are simple, monochromatic outlines, maintaining a minimalist and functional aesthetic. Imagery's role is primarily atmospheric and product showcase.

## Elevation

| Element | Style |
| --- | --- |
| Modal Card | rgba(0, 0, 0, 0.3) 0px 10px 40px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Aperol | Similar focus on Italian heritage and spirit branding, with a rustic, authentic aesthetic. |
| Seedlip | Similar high-quality product photography and a refined, yet earthy brand feel for spirits. |
| Death & Co | Shares a sophisticated, dark liquor brand visual identity with strong typography and minimal embellishments. |
| Kombucha Brands (e.g., Health-Ade) | Emphasizes natural ingredients and a handcrafted feel through rustic colors and clear product focus. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #181313
background: #fefefe
border: #181313
accent: #a3a96f
primary action: #a3a96f (filled action)

Example Component Prompts:
1. Create a primary action button: Sage Bloom (#a3a96f) background, Ink (#181313) text, Ano font weight 400, 0px border radius, 18px vertical and 20px horizontal padding.
2. Design a subscription modal: Canvas (#fefefe) background, 8px border radius, `rgba(0, 0, 0, 0.3) 0px 10px 40px 0px` box shadow. Inside, center an input field with #f9f9f9 background, Ash (#b2b2b2) border, 4px radius, 14px vertical and 16px horizontal padding. Below it, add an Indigo (#2858d5) subscription button with Canvas (#fefefe) text, 4px border radius, 14px vertical and 16px horizontal padding. Content text is Charcoal (#333333).
3. Implement a ghost navigation item: Transparent background, Ink (#181313) text, Ano font weight 400, 0px padding, 0px border radius. When hovered, text color remains Ink, but add a subtle underline if interactive.
4. Create a hero section headline: 'Bitter Italian Liqueurs, Born in Brooklyn' using Ano font, 50px size, weight 700, Ink (#181313) color, letter-spacing -0.01em, centered alignment, with 40px section padding at top and bottom.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518271470-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518271470-thumb.jpg |
