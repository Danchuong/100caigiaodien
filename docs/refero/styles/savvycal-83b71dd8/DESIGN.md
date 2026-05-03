# Savvycal — Refero Style

- Refero URL: https://styles.refero.design/style/83b71dd8-de08-4c57-80b2-9fced17a0ca5
- Site URL: https://savvycal.com
- ID: 83b71dd8-de08-4c57-80b2-9fced17a0ca5
- Theme: light
- Industry: productivity
- Created: 2026-04-05T20:08:55.000Z
- Ranks: newest: 949, popular: 417, trending: 828

> Organic Green Engine. A lush, vibrant green landscape where every element functions with precision.

## Description

SavvyCal feels like a playful, yet precise, garden of productivity. The dominant use of organic greens and a vibrant lime accent creates an energetic atmosphere, grounded by a warm, almost parchment-like off-white background. The interplay between the structured, almost architectural feel of GT-America typefaces and the more expressive, flowing display type of GT-Alpina gives the system its distinctive voice: serious about function, but delivered with a light, engaging touch. Small, unexpected flourishes like the 'new' badge and the subtle orange accent line add personality without sacrificing clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| SavvyGreen | #0d542b | brand | Primary brand color, background for hero sections and key promotional blocks. Deep and grounded, providing a rich base for brighter accents. |
| LimeAccent | #b9ff78 | accent | Primary interactive accent for buttons and links. This vivid lime is the most active color, signaling interactivity and success. |
| BurntOrange | #f54320 | accent | Secondary accent for 'new' badges, decorative elements, and occasional highlights. Its warmth contrasts sharply with the greens, drawing immediate attention. |
| Parchment | #fcf7ed | neutral | Main page background, providing a soft, warm canvas for content. It's a key distinguishing factor, avoiding stark white. |
| Coal | #1c1917 | neutral | Primary text color for most body copy and headings. Provides strong contrast against Parchment. |
| ForestGreen | #008236 | brand | Secondary brand green, used for internal iconography, borders, and some text elements. Visually similar to SavvyGreen but used for details. |
| SubtleGreenTint | #dcfce7 | neutral | Subtle background tint for highlighting specific content blocks or sections. |
| Slate | #44403b | neutral | Secondary text color for less prominent body copy, descriptions, and metadata. |
| LightBorder | #e5e7eb | neutral | Subtle borders and dividers for UI elements. |
| CrimsonPattern | #ffe3e3 | neutral | Background for decorative patterns and illustrations, providing a soft red counterpart to the BurntOrange. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT-Alpina-Condensed | Playfair Display | 700 | 96px, 136px | 1.00, 1.08 | Display headlines; the 96px and 136px sizes grab attention with bold weight and condensed elegance, creating a distinct editorial feel. |
| GT-America-Condensed | Oswald | 400 | 18px, 38px | 1.38, 1.56 | Sub-display headings and emphasized phrases, leveraging the condensed form to create impact while conserving horizontal space. |
| GT-America-Standard | Inter | 400, 700 | 16px, 18px, 20px, 24px, 30px | 1.33, 1.38, 1.50, 1.56 | Workhorse text for structural elements like navigation, subheadings, and lead paragraphs. Its slightly condensed nature at these sizes gives a modern, efficient feel with a slight edge. |
| GT-America-Extended | Inter | 400, 700 | 10px, 14px, 16px, 18px, 24px | 1.00, 1.43, 1.50, 1.56 | Labels, captions, and buttons. This extended variant provides a contrast to the standard and condensed forms, offering visual variety at smaller sizes. |
| InterVariable | Inter | 400 | 16px | 1.50 | Used for standard body text and detailed paragraphs, ensuring high readability at functional sizes while complementing the GT-America family. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| body-sm | 14 | 1.43 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.56 | -0.126 |
| heading-sm | 20 | 1.5 |  |
| heading | 24 | 1.56 | -0.168 |
| heading-lg | 30 | 1.33 | -0.21 |
| display | 38 | 1.56 | 1.9 |
| display-lg | 96 | 1 |  |
| display-xl | 136 | 1.08 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "badges": "24px",
    "buttons": "8px",
    "default": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "48-64px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Primary CTA Button Group



### Pricing Card



### Feature Section Block



### Primary CTA Button

**Role:** Main call to action button (e.g., 'Try SavvyCal risk-free')

Background: LimeAccent (#b9ff78), Text: Coal (#1c1917), Border Radius: 8px, Padding: 20px 40px. The vibrant lime makes it pop against both SavvyGreen and Parchment backgrounds.

### Secondary CTA Button - Orange

**Role:** Alternative call to action button for specific, emphasized actions

Background: BurntOrange (#f54320), Text: white (#ffffff), Border Radius: 8px, Padding: 20px 40px. Used for high-contrast actions, leveraging the strong red as an alarm.

### Header Navigation Item (Active)

**Role:** Active state for navigation links in the header.

Background: oklch(0.216 0.006 56.043) (SavvyGreen), Text: oklab(0.977267 0.0013901 0.0142071 / 0.7) (White with 70% opacity), Border Radius: 0px, Padding: 8px 24px. The opaque white text against the deep green ensures visibility within the header.

### Hero Headline

**Role:** Dominant headline in the main hero section.

Font: GT-Alpina-Condensed, Weight: 700, Size: 136px, Line-height: 1.08, Color: LimeAccent (#b9ff78). Set prominently on the SavvyGreen background, it's the first visual engagement on the page.

### Section Subheading

**Role:** Sub-title for content sections.

Font: GT-America-Condensed, Weight: 400, Size: 38px, Line-height: 1.56, Letter-spacing: 1.9px, Color: Coal (#1c1917). Used for secondary section titles, balancing impact with legibility.

### Feature Card (Image)

**Role:** Container for product feature visuals or descriptions.

Background: Parchment (#fcf7ed), Border Radius: 8px, Padding: 24px. Features a prominent screenshot or image area, often with a subtle drop shadow.

## Do's

- Do use GT-Alpina-Condensed 700 for display headings at 96px or 136px for maximum impact and distinct brand voice.
- Do apply LimeAccent (#b9ff78) for all primary interactive elements like buttons and active links for consistent user feedback.
- Do use Parchment (#fcf7ed) as the default page background, offering a warm and inviting base.
- Do ensure key CTA buttons have a Border Radius of 8px and generous padding of 20px 40px to feel substantial and clickable.
- Do utilize the SavvyGreen (#0d542b) as a background for high-impact sections, creating depth and a distinct visual block.
- Do incorporate the BurntOrange (#f54320) for 'New' badges and secondary emphasis, particularly against green or white backgrounds.

## Don'ts

- Don't use stark white backgrounds; always opt for Parchment (#fcf7ed) or SubtleGreenTint (#dcfce7) to maintain the brand's warmth.
- Don't use font weights lighter than 400 for any text, ensuring readability across all type families.
- Don't deviate from the 8px default border radius for buttons and cards; sharp corners are not part of this aesthetic.
- Don't introduce additional accent colors outside of LimeAccent (#b9ff78), BurntOrange (#f54320), and ForestGreen (#008236) to maintain chromatic discipline.
- Don't use generic system fonts; always prioritize the custom GT-Alpina, GT-America, and InterVariable families for brand consistency.

## Layout

The page primarily follows a max-width contained layout, with content centered within a comfortable reading width, though the hero section breaks this by utilizing a full-width background. Sections largely alternate between the warm Parchment background and deeper SavvyGreen blocks, creating a clear vertical rhythm. The hero features a centered headline over a swirling organic graphic. Content sections often use a two-column layout, alternating between text on the left and a product visual on the right, or vice versa. Footer elements are organized into clear and compact columns. The overall density is comfortable, with generous vertical spacing (48-64px) separating major sections, creating a breathable experience.

## Imagery

The visual language blends crisp product screenshots with abstract, organic line art illustrations, and occasional lifestyle imagery. Product shots are typically clean, showcasing UI within browser windows, often overlaid on soft, muted landscape photography backgrounds. Illustrations are primarily abstract, geometric patterns or simple icons rendered in BurntOrange (#f54320) or ForestGreen (#008236), often used decoratively to break up sections or add visual interest. The organic, swirling pattern visible in the hero serves as a recurring visual motif, providing a sense of natural movement. Images are generally contained within their sections, not full-bleed, with a preference for 8px rounded corners on product screenshots.

## Similar Brands

| Business | Why |
| --- | --- |
| Calendly | Both calendaring tools with clear, functional UI, but SavvyCal uses a more distinct brand color palette and expressive typography. |
| Airtable | Shares a similar blend of structured UI elements with vibrant, yet controlled, use of color and custom typography for brand distinctiveness. |
| Mailchimp (old brand) | The use of an organic, slightly quirky green and a warm, inviting background with custom, characterful typography echoes Mailchimp's earlier, more 'friendly' brand identity. |
| Superhuman | Focus on high-fidelity user experience with custom typography and a precise, considered color palette for functional cues. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text (primary): #1c1917
- Background (page): #fcf7ed
- CTA Button: Fill #b9ff78, Text #1c1917
- Border (light): #e5e7eb
- Accent (secondary): #f54320

Example Component Prompts:
1. Create a hero section: SavvyGreen (#0d542b) background with an organic swirling pattern. Centered headline 'The fresh way to find a time to meet.' using GT-Alpina-Condensed 700 at 136px, LimeAccent (#b9ff78). Subtext at 18px GT-America-Standard 400, white text. Primary CTA button 'Try SavvyCal risk-free' (LimeAccent #b9ff78, Coal #1c1917 text, 8px radius, 20px 40px padding).
2. Generate a feature section: Parchment (#fcf7ed) background. Subheading 'Scheduling Experience' using GT-America-Condensed 400 at 38px, Coal (#1c1917), letter-spacing 1.9px. Underneath, a decorative wavy line in BurntOrange (#f54320). Body text below uses InterVariable 400 at 16px, Slate (#44403b).
3. Design a 'New' badge: BurntOrange (#f54320) background, white (#ffffff) text 'New', border-radius 24px, padding 2px 6px. Font is GT-America-Extended 700 at 10px. Place it adjacent to a navigation link.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775943699916-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775943699916-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/83b71dd8-de08-4c57-80b2-9fced17a0ca5-1777568420174-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/83b71dd8-de08-4c57-80b2-9fced17a0ca5-1777568420174-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/83b71dd8-de08-4c57-80b2-9fced17a0ca5-1777568420174-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/83b71dd8-de08-4c57-80b2-9fced17a0ca5-1777568420174-preview-detail-poster.jpg |
