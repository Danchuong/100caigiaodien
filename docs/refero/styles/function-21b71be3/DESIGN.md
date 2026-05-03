# Function — Refero Style

- Refero URL: https://styles.refero.design/style/21b71be3-78a0-4681-a5b9-64cc4b40eb67
- Site URL: https://www.functionhealth.com
- ID: 21b71be3-78a0-4681-a5b9-64cc4b40eb67
- Theme: light
- Industry: other
- Created: 2026-04-30T00:12:10.227Z
- Ranks: newest: 874, popular: 326, trending: 206

> organic science lab

## Description

Function Health uses a soft, organic health-science aesthetic: light, airy surfaces, grounded typography, and an earthy orange accent. The design feels approachable and trustworthy, balancing scientific rigor with human comfort. Typography mixes a robust sans-serif for functional text with an elegant serif for display headlines, establishing a clear hierarchy. Components are lightweight with generous radii, often featuring subtle background tints to differentiate sections.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Amber Glow | #b05a36 | brand | Primary action background, iconography, accent borders — a warm, earthy orange providing a single point of vivid interaction and brand recognition |
| Night Sky | #2a2b2f | neutral | Primary text for headings and body, providing strong contrast on light surfaces |
| Charcoal Grey | #333333 | neutral | Secondary text, borders, and functional iconography, slightly softer than primary text for hierarchy |
| Faded Stone | #515151 | neutral | Muted body text and subtle element borders, lower contrast for less prominent information |
| Parchment White | #fef9ef | neutral | Light neutral action fill for buttons on dark surfaces. |
| Cream Canvas | #f5eee1 | neutral | Secondary background surfaces and elevated card backgrounds, offering a soft distinction from the main canvas |
| Warm Mist | #d1c9bf | neutral | Subtle background panels and less prominent borders, used for tertiary surface differentiation |
| Slate Border | #808988 | neutral | Input component borders, provides a soft, focused outline |
| Off-White | #ffffff | neutral | Focused text on dark backgrounds, or pure white card backgrounds for a crisp contrast layer |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Ftbase | Inter | 300, 400, 600, 700 | 12px, 14px, 16px, 18px, 20px, 24px, 88px | 1.00, 1.10, 1.11, 1.20, 1.25, 1.30, 1.40, 1.43, 1.50 | Primary sans-serif for all UI elements, body text, navigation, and functional headings. Its consistent tracking establishes a practical, readable tone across the interface. |
| Financier Display | Playfair Display | 300, 400 | 34px, 45px, 64px, 80px | 0.90, 1.00, 1.10, 1.15 | Elegant serif for large display headings. The light weights (300, 400) make it feel sophisticated and welcoming, rather than imposing. |
| Fragment mono | Fira Code | 400 | 11px | 1.00 | Monospaced font for small, technical labels or badging where a distinct, compact style is needed. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1 | 0 |
| body | 14 | 1.4 | -0.322 |
| body-lg | 16 | 1.4 | -0.368 |
| subheading | 20 | 1.3 | -0.46 |
| heading | 24 | 1.25 | -0.552 |
| heading-lg | 34 | 1.15 | 0 |
| display-sm | 45 | 1.11 | 0 |
| display | 64 | 1.1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "small": "2px",
    "inputs": "1440px",
    "buttons": "40px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "25px",
  "pageMaxWidth": "1434px"
}
```

## Components

### Primary Action Button

**Role:** Filled button for primary calls to action.

Background: Amber Glow (#b05a36), Text: Parchment White (#fef9ef), Padding: 12px vertical, 24px horizontal, Border Radius: 40px.

### Ghost Button

**Role:** Outlined button for secondary actions, or when less visual prominence is desired.

Background: Parchment White (#fef9ef), Border: 1px solid Amber Glow (#b05a36), Text: Amber Glow (#b05a36), Padding: 12px vertical, 24px horizontal, Border Radius: 40px.

### Text Link Button

**Role:** Minimal button styled as a text link.

Background: transparent, Text: Charcoal Grey (#333333), Padding: 0, Border Radius: 0.

### Feature Card

**Role:** Card for showcasing key features or information blocks.

Background: Cream Canvas (#f5eee1), Padding: 40px vertical, 20px horizontal, Border Radius: 12px, No shadow.

### Elevated Content Card

**Role:** Card with subtle shadow for emphasized content blocks.

Background: Cream Canvas (#f5eee1), Padding: 56px vertical, 64px horizontal, Border Radius: 24px, Shadow: rgba(42, 43, 47, 0.1) 12px 32px 80px 0px.

### Input Field

**Role:** Standard input field for user data entry.

Background: pure white, Text: Night Sky (#2a2b2f), Border: 1px solid Slate Border (#808988), Padding: 13px vertical, 16px horizontal, Border Radius: 1440px (pill shape).

### Circular Badge

**Role:** Small, decorative circular badge.

Background: transparent, Text: Charcoal Grey (#333333), Padding: 1px vertical, 6px horizontal, Border Radius: 50%.

## Do's

- Use Ftbase for all body text, navigation, and functional headings at Ftbase weight 400 for optimal readability.
- Apply Amber Glow (#b05a36) exclusively for primary interactive elements, brand iconography, and accents, ensuring it is a consistent focal point.
- Maintain a generous border radius of 40px for all interactive buttons and 12px for cards to convey a soft, friendly aesthetic.
- Employ Parchment White (#fef9ef) as the primary background for all page sections, reserving Cream Canvas (#f5eee1) and Warm Mist (#d1c9bf) for subtle content differentiation.
- Utilize Financier Display for all major headings above 34px, emphasizing its lighter weights (300, 400) for an elegant and inviting feel.
- Ensure input fields have a 1440px border-radius, creating a distinct pill shape, with a Slate Border (#808988).
- Space elements with multiples of 8px, using 16px for `elementGap` and 25px for `cardPadding` to maintain a comfortable visual rhythm.

## Don'ts

- Do not introduce new vivid colors; Amber Glow (#b05a36) is the sole saturated accent color.
- Avoid heavy shadows; use rgba(42, 43, 47, 0.1) 12px 32px 80px 0px sparingly for only the most elevated content.
- Do not use dark backgrounds that contrast sharply with the established light theme; maintain the soft, airy feel.
- Do not use Ftbase for large display headings; reserve Financier Display for these to preserve typographic hierarchy.
- Avoid tight spacing; maintain the comfortable density established by 16px element gaps and 25px card padding.
- Do not use sharp corners; all interactive elements and most containers should use generous border radii (40px or 12px).

## Layout

The page primarily uses a max-width contained layout of 1434px, with content centered. The hero section, however, is full-bleed, featuring a large background image with centered, overlaid text and a call to action. Subsequent sections alternate between two dominant patterns: a centered stack of content (like 'Testing is easy' cards) or alternating two-column layouts featuring text on one side and a visual element on the other. Vertical rhythm is maintained by consistent section gaps. Navigation is a sticky top bar, lightweight with minimal branding and a clear primary action button.

## Imagery

The site uses diverse imagery. The hero section features a desaturated, slightly hazy photographic background of a figure running, conveying a sense of aspiration and nature-infused health. Other sections utilize minimal, clean product-illustration style graphics depicting simple data visualizations (like a line graph) and an abstract calendar. Icons are generally outlined with a medium stroke weight. The overall feel is a balance of soft, aspirational photography and clear, illustrative explanations. Imagery is generally contained within sections or cards, with the hero being a full-width background element.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Content Card | rgba(42, 43, 47, 0.1) 12px 32px 80px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Levels Health | Similar focus on health monitoring, uses a light, clean aesthetic with a functional sans-serif and minimal accents. |
| Eight Sleep | Blends high-tech health with soft, approachable design language, including rounded corners and a comfortable spacing. |
| Whoop | Employs a sophisticated yet accessible visual style for health and performance data, often combining soft neutrals with warm accent colors. |
| Calm | Leverages a natural, subdued color palette and comfortable typography to create a sense of calm and well-being. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #2a2b2f
- background: #fef9ef
- border: #d1c9bf
- accent: #b05a36
- primary action: #b05a36 (filled action)

### 3-5 Example Component Prompts
- Create a Primary Action Button: #b05a36 background, #fef9ef text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- **Create a Feature Card**: Background Cream Canvas (#f5eee1), padding 40px vertical, 20px horizontal, border-radius 12px. Headline '160+ lab tests' in Ftbase, 24px, weight 700, color Night Sky (#2a2b2f). Body text in Ftbase, 16px, weight 400, color Faded Stone (#515151).
- **Create a Ghost Button**: Background Parchment White (#fef9ef), border 1px solid Amber Glow (#b05a36), text Amber Glow (#b05a36), Ftbase 16px weight 400, padding 12px vertical, 24px horizontal, border-radius 40px.
- **Create an Input Field**: Background pure white, text placeholder in Faded Stone (#515151), input text in Night Sky (#2a2b2f), border 1px solid Slate Border (#808988), padding 13px vertical, 16px horizontal, border-radius 1440px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507906064-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507906064-thumb.jpg |
